$(document).ready(function() {
    // Selector para el botón flotante de WhatsApp
    var $waButton = $('.wa_btn_popup');
    // Selector para la caja de chat emergente
    var $waChatBox = $('.wa_popup_chat_box');

    // Maneja el clic en el botón flotante
    $waButton.on('click', function() {
        // Toggle (alternar) la clase 'wa_active' en la caja de chat
        $waChatBox.toggleClass('wa_active');
    });

    // Opcional: Cerrar la caja de chat al hacer clic fuera de ella
    $(document).on('click', function(event) {
        // Si el clic no fue dentro del botón ni dentro de la caja de chat
        if (!$waButton.is(event.target) && !$waChatBox.is(event.target) && $waButton.has(event.target).length === 0 && $waChatBox.has(event.target).length === 0) {
            // Y si la caja de chat está visible, entonces la oculta
            if ($waChatBox.hasClass('wa_active')) {
                $waChatBox.removeClass('wa_active');
            }
        }
    });
});