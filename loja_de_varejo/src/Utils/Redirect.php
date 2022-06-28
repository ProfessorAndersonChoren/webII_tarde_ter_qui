<?php

namespace APP\Utils;

function redirect(
    string $message,
    string $type = 'success',
    string $url = '../View/message.php'
)
{
    session_start();
}