<?php
// Configuración
$BOT_TOKEN = "7487162142:AAEKoT5o43ZOY9inpYp-RGuWiuAfytVh-xs";
$API_URL = "https://api.telegram.org/bot$BOT_TOKEN/";

// Recibir la actualización de Telegram
$update = json_decode(file_get_contents("php://input"), TRUE);

if (isset($update["message"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    // Responder según el mensaje recibido
    switch (strtolower($message)) {
        case "/start":
            sendMessage($chat_id, "¡Hola! Este es el bot de EvolutionHealthy.");
            break;
        case "registro":
            sendMessage($chat_id, "Enlace para registrar entrada: " . "https://tu-dominio.com/registro-entrada");
            break;
        default:
            sendMessage($chat_id, "No entiendo el comando. Usa /start o escribe 'registro'.");
    }
}

function sendMessage($chat_id, $text) {
    global $API_URL;
    $url = $API_URL . "sendMessage?chat_id=$chat_id&text=" . urlencode($text);
    file_get_contents($url);
}
?>
