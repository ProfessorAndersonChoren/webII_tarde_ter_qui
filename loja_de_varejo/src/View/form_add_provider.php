<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor dos Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="bg-blue-400">
            <ul class="flex">
                <li class="mr-3">
                    <a href="../../index.html">Home</a>
                </li>
                <li>
                    <a href="../View/form_add_product.php">Cadastro de produtos</a>
                </li>
                <li>
                    <a class="ml-3" href="#">Cadastro de fornecedores</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="../Controller/Provider.php" method="POST">
            <section class="columns-2 m-4">
                <article>
                    <label for="providerCnpj" class="cursor-pointer">CNPJ do Fornecedor</label>
                    <input type="number" name="providerCnpj" class="border border-blue-600">
                </article>
                <article>
                    <label for="providerName" class="cursor-pointer">Nome do Fornecedor</label>
                    <input type="text" name="providerName" class="border border-blue-600">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 rounded text-white bg-blue-700">Cadastrar</button>
            </article>
        </form>
    </main>
</body>

</html>