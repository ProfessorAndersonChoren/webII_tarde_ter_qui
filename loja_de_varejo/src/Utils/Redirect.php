<?php

namespace APP\Utils;

class Redirect
{
    public static function redirect(
        string|array $message,
        string $type = 'success',
        string $url = '../View/message.php'
    ) {
        session_start();
        if (is_array($message)) {
            $items = "";
            foreach($message as $msg){
                $items .= "<li>$msg</li>";
            }
            $_SESSION['msg_warning'] = $items;
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
}
