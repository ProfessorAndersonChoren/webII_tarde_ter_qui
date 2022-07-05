<?php

namespace APP\Controller;

use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;

require_once '../../vendor/autoload.php';

if (empty($_POST)) {
    Redirect::redirect(message: "Requisição inválida", type: "error");
}

$providerName = $_POST['providerName'];
$providerCnpj = $_POST['providerCnpj'];

$error = array();

if (!Validation::validateName($providerName)) {
    array_push($error, "O nome do fornecedor deve conter pelo menos 5 caracteres");
}

if (!Validation::validateCnpj($providerCnpj)) {
    array_push($error, "O cnpj deve conter pelo 14 digitos");
}

if ($error) {
    Redirect::redirect(message: $error, type: 'warning');
} else {
    $provider = new Provider(
        cnpj: $providerCnpj,
        name: $providerName
    );

    Redirect::redirect("Fornecedor cadastrado com sucesso!!!");
}
