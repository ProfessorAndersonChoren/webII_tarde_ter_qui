<?php

namespace APP\Controller;

if(empty($_POST)){
    echo "Deu ruim!!!";
    exit;
}

$productBarCode = $_POST['barCode'];
$productName = $_POST['name'];
$productProvider = $_POST['provider'];
$productCost = $_POST['cost'];
$productQuantity = $_POST['quantity'];

echo $productName;