<?php
    require "../../server/config/connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | Gestão de Presenças</title>
    <link rel="stylesheet" href="../assets/styles/output.css" />
</head>
<body>
    <header class="bg-[#9d50bb] text-white font-semibold flex flex-row justify-between items-center px-7 py-4">
        <div class="text-lg">
            <?php
                echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="border border-white rounded-md px-5 py-2 bg-[#6e48aa] hover:bg-[#9d50bb]">
            <a href="../../server/src/logout-route.php">Sair</a>
        </div>
    </header>
    <main >
        <section class="">
            <h1>DASHBOARD</h1>
        </section>
    </main>
    <footer class="bg-[#9d50bb] text-white text-center fixed bottom-0 py-2 w-full">
        <p>&copy; Todos os direitos reservados. Desenvolvido por <strong><a href="https://jay-ubisse.com" target="_blank">Jay Ubisse</a></strong></p>
    </footer>
</body>
</html>