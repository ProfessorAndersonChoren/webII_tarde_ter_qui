<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="container h-screen flex justify-center items-center">
        <?php
        session_start();
        if (!empty($_SESSION['msg_success'])) :
        ?>
            <article class="bg-green-700 rounded w-2/4 text-white flex flex-col justify-center items-center">
                <p>
                    <?= $_SESSION['msg_success']  ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_success']);
        ?>
        <?php
        if (!empty($_SESSION['msg_error'])) :
        ?>
            <article class="bg-red-700 rounded w-2/4 text-white flex flex-col justify-center items-center">
                <p>
                    <?= $_SESSION['msg_error']  ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_error']);
        ?>
    </main>
</body>

</html>