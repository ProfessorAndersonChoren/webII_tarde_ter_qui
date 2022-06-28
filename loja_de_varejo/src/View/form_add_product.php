<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de produtos</title>
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
                    <a href="#">Cadastro de produtos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="../Controller/Product.php" method="POST">
            <section class="columns-3 m-4">
                <article>
                    <label for="barCode" class="cursor-pointer">Código de barra: </label>
                    <input type="number" name="barCode" id="barCode" class="border border-blue-400">
                </article>
                <article>
                    <label for="name" class="cursor-pointer">Nome do produto: </label>
                    <input type="text" name="name" id="name" class="border border-blue-400">
                </article>
                <article>
                    <label for="provider" class="cursor-pointer">Fornecedor: </label>
                    <select name="provider" id="provider" class="border">
                        <option value="1">Fornecedor 1</option>
                        <option value="2">Fornecedor 2</option>
                        <option value="3">Fornecedor 3</option>
                    </select>
                </article>
            </section>
            <section class="columns-2">
                <article>
                    <label for="cost" class="cursor-pointer">Custo de aquisição: </label>
                    <input type="number" name="cost" id="cost">
                </article>
                <article>
                    <label for="quantity" class="cursor-pointer">Quantidade adquirida</label>
                    <input type="number" name="quantity" id="quantity" class="border border-blue-400">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 rounded text-white bg-blue-700">Cadastrar</button>
            </article>
        </form>
    </main>
</body>

</html>