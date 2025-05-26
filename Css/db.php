<?php
$host = 'localhost';
$db = 'carrito';
$user = 'root'; // Ajusta según tu configuración
$pass = '';     // Pon tu contraseña

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
