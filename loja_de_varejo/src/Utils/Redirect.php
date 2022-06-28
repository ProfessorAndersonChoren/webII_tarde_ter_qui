<?php

namespace APP\Utils;

function redirect(
    string|array $message,
    string $type = 'success',
    string $url = '../View/message.php'
) {
    session_start();
    if (is_array($message)) {
        // TODO Implementar a leitura do array
    } else {
        if ($type == 'success') {
            $_SESSION['msg_success'] = $message;
        } else if ($type == 'error') {
            $_SESSION['msg_error'] = $message;
        }
    }
    header("location:$url");
    exit;
}
