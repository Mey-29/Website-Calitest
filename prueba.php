<?php
session_start();

// Conexión a la base de datos
$host = 'localhost';
$db = 'carrito';
$user = 'root'; // cambia si tu usuario es otro
$pass = '';     // pon tu contraseña si la tiene

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Agregar al carrito
if (isset($_GET['agregar'])) {
    $id = $_GET['agregar'];
    $_SESSION['carrito'][$id] = ($_SESSION['carrito'][$id] ?? 0) + 1;
    header("Location: index.php");
    exit;
}

// Eliminar del carrito
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    unset($_SESSION['carrito'][$id]);
    header("Location: index.php?ver=1");
    exit;
}

// Procesar pedido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $carrito = $_SESSION['carrito'] ?? [];

    if ($nombre && $direccion && !empty($carrito)) {
        $total = 0;
        foreach ($carrito as $id => $cant) {
            $precio = $conn->query("SELECT precio FROM productos WHERE id = $id")->fetchColumn();
            $total += $precio * $cant;
        }

        $stmt = $conn->prepare("INSERT INTO pedidos (nombre_cliente, direccion, total) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $direccion, $total]);
        $pedido_id = $conn->lastInsertId();

        foreach ($carrito as $id => $cant) {
            $stmt = $conn->prepare("INSERT INTO pedidos_detalle (pedido_id, producto_id, cantidad) VALUES (?, ?, ?)");
            $stmt->execute([$pedido_id, $id, $cant]);
        }

        unset($_SESSION['carrito']);
        echo "<script>alert('¡Pedido enviado con éxito!'); window.location='index.php';</script>";
        exit;
    }
}

// Obtener productos
$productos = $conn->query("SELECT * FROM productos")->fetchAll(PDO::FETCH_ASSOC);
$carrito = $_SESSION['carrito'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito Simple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">🛍 Tienda</a>
        <a class="btn btn-outline-light" href="index.php?ver=1">
            🛒 Carrito (<?= array_sum($carrito) ?>)
        </a>
    </div>
</nav>

<div class="container">

<?php if (isset($_GET['ver'])): ?>
    <h2>Tu Carrito</h2>
    <?php if (empty($carrito)): ?>
        <p>El carrito está vacío.</p>
    <?php else: ?>
        <ul class="list-group mb-3">
        <?php
        $total = 0;
        foreach ($carrito as $id => $cant):
            $producto = $conn->query("SELECT * FROM productos WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
            $subtotal = $producto['precio'] * $cant;
            $total += $subtotal;
        ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $producto['nombre'] ?> x <?= $cant ?> = $<?= number_format($subtotal, 2) ?>
                <a href="index.php?eliminar=<?= $id ?>" class="btn btn-sm btn-danger">Eliminar</a>
            </li>
        <?php endforeach; ?>
        </ul>
        <p><strong>Total: $<?= number_format($total, 2) ?></strong></p>

        <h4>Finalizar Compra</h4>
        <form method="post">
            <div class="mb-3">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Dirección:</label>
                <textarea name="direccion" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Confirmar Pedido</button>
        </form>
    <?php endif; ?>
    <a href="index.php" class="btn btn-link mt-3">← Volver a productos</a>

<?php else: ?>
    <h2>Productos</h2>
    <div class="row">
    <?php foreach ($productos as $producto): ?>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5><?= $producto['nombre'] ?></h5>
                    <p>$<?= $producto['precio'] ?></p>
                    <a href="index.php?agregar=<?= $producto['id'] ?>" class="btn btn-primary">Agregar</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

</div>

<footer class="text-center mt-5 mb-3 text-muted">
    &copy; <?= date('Y') ?> - Tu Tienda
</footer>

</body>
</html>
 