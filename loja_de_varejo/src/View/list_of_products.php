<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-blue-400">
            <ul class="flex">
                <li class="mr-3">
                    <a href="#">Home</a>
                </li>
                <li class="mr-3">
                    <a href="form_add_product.php">Cadastro de produtos</a>
                </li>
                <li>
                    <a href="form_add_provider.php">Cadastro de fornecedores</a>
                </li>
                <li>
                    <a href="../Controller/Product.php?operation=list">Listar produtos</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php session_start(); ?>
    <h1 class="text-blue-500 text-3xl text-center p-4">Lista de produtos cadastrados</h1>
    <table class="w-full">
        <thead class="bg-blue-800 text-white">
            <th>#</th>
            <th>Código de barra</th>
            <th>Nome do produto</th>
            <th>Preço de venda</th>
            <th>Quantidade em estoque</th>
            <th>Status do produto</th>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['list_of_products'] as $product) :
            ?>
                <tr>
                    <td>
                        <?= $product['product_code'] ?>
                    </td>
                    <td>
                        <?= $product['product_barcode'] ?>
                    </td>
                    <td>
                        <?= $product['product_name'] ?>
                    </td>
                    <td>
                        <?= $product['product_price'] ?>
                    </td>
                    <td>
                        <?= $product['product_quantity'] ?>
                    </td>
                    <td>
                        <?= $product['product_active'] ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>