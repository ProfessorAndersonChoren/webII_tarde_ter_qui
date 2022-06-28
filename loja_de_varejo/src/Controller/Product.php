<?php

namespace APP\Controller;

use APP\Model\Product;
use APP\Model\Provider;
use APP\Utils\Redirect;

use function APP\Utils\redirect;

require_once '../../vendor/autoload.php';
require_once '../Utils/Redirect.php';

if (empty($_POST)) {
    redirect(
        message: 'Requisição inválida!!!',
        type: 'error'
    );
}

$productBarCode = $_POST['barCode'];
$productName = $_POST['name'];
$productProvider = $_POST['provider'];
$productCost = $_POST['cost'];
$productQuantity = $_POST['quantity'];

$product = new Product();
$product->barCode = $productBarCode;
$product->name = $productName;
$product->stock = $productQuantity;
$product->provider = new Provider();
$product->price = 0;

echo '<pre>';
var_dump($product);
echo '</pre>';

// redirect('Produto cadastrado com sucesso!!!');
