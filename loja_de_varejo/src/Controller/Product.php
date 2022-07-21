<?php

namespace APP\Controller;

use APP\Model\DAO\ProductDAO;
use APP\Model\Product;
use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;
use LDAP\Result;
use PDOException;

require_once '../../vendor/autoload.php';

if (empty($_GET['operation'])) {
    Redirect::redirect(message: 'Requisição inválida!!!', type: 'error');
}

switch ($_GET['operation']) {
    case 'insert':
        insertProduct();
        break;
    case 'list':
        listProducts();
        break;
    default:
        Redirect::redirect(message: 'A operação informada é inválida!!!', type: 'error');
}

function insertProduct()
{
    if (empty($_POST)) {
        Redirect::redirect(
            message: 'Requisição inválida!!!',
            type: 'error'
        );
    }

    $productBarCode = $_POST['barCode'];
    $productName = $_POST['name'];
    $productProvider = $_POST['provider'];
    $productCost = $_POST['cost'];
    $productQuantity = $_POST['quantity'];

    $error = array();

    if (!Validation::validateBarCode($productBarCode)) {
        array_push($error, 'O código de barra do produto é inválido!!!');
    }

    if (!Validation::validateName($productName)) {
        array_push($error, 'O nome do produto deve conter ao menos 5 caracteres!!!');
    }

    if (!Validation::validateNumber($productCost)) {
        array_push($error, 'O custo de aquisição do produto deve ser maior que zero!!!');
    }

    if (!Validation::validateNumber($productQuantity)) {
        array_push($error, 'A quantidade em estoque deve ser maior que zero!!!');
    }

    if ($error) { // Se o array tiver elementos
        Redirect::redirect(
            message: $error,
            type: 'warning'
        );
    } else { // Se o array NÃO tiver elementos
        $product = new Product(
            name: $productName,
            tributes: 0.75,
            operationCost: 0.89,
            cost: $productCost,
            provider: new Provider(
                name: "Fornecedor 1"
            ),
            stock: $productQuantity,
            barCode: $productBarCode,
            lucre: 0.5
        );
        $dao = new ProductDAO();
        try {
            $result = $dao->insert($product);
            if ($result) {
                Redirect::redirect(message: 'Produto cadastrado com sucesso!!!');
            } else {
                Redirect::redirect(['Lamento, não foi possível cadastrar o produto!!!'], 'warning');
            }
        } catch (PDOException $e) {
            Redirect::redirect(message: 'Lamento, houve um erro inesperado no sistema!!!', type: 'error');
            // echo $e->getMessage();
        }
    }
}
function listProducts()
{
    $dao = new ProductDAO();
    $products = $dao->findAll();

    if ($products) {
        session_start();
        $_SESSION['list_of_products'] = $products;
        header("location:../View/list_of_products.php");
    } else {
        Redirect::redirect(message: ['Lamento, não existem produtos cadastrados'], type: 'warning');
    }
}
