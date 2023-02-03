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
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] overflow-scroll">
        <section class="bg-white w-9/12 h-5/6 mx-auto mt-10 p-6 rounded-lg">
            <h1 class="text-[#9d50bb] text-xl font-semibold border-b border-[#9d50bb] w-fit">DASHBOARD</h1>
            <div class="flex flex-col gap-2 m-3 mt-6 h-5/6">
                <div class="flex flex-row gap-2 h-1/2">
                    <a href="../register/" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                        <span>
                            Registar funcionário
                        </span>
                    </a>
                    <a href="#" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                        <span>
                            Registar horário de chegada
                        </span>
                    </a>
                </div>
                <div class="flex flex-row gap-2 h-1/2">
                    <a href="../employees-list/" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                        <span>
                            Ver lista de funcionários
                        </span>
                    </a>
                    <a href="#" class="border-2 border-[#9d50bb] rounded-md w-[50%] h-full flex justify-center items-center text-[#9d50bb] text-xl font-bold hover:bg-[#9d50bb] hover:text-white">
                        <span>
                            Ver horários de chegada
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-[#9d50bb] text-white text-center fixed bottom-0 py-2 w-full">
        <p>&copy; Todos os direitos reservados. Desenvolvido por <strong><a href="https://jay-ubisse.com" target="_blank">Jay Ubisse</a></strong></p>
    </footer>
</body>
</html>