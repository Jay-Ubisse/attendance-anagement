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
    <title>Registar Presença | Gestão de Presenças</title>
    <link rel="stylesheet" href="../assets/styles/output.css" />
</head>
<body>
    <header class="bg-[#9d50bb] text-white font-semibold flex flex-row justify-between items-center px-7 py-4">
        <div class="text-lg">
            <?php
                echo $_SESSION['user-data']['username'];
            ?>
        </div>
        <div class="flex flex-row gap-4">
            <div class="border border-white rounded-md px-5 py-2 bg-[#6e48aa] hover:bg-[#9d50bb]">
                <a href="../home/">Dashboard</a>
            </div>
            <div class="border border-white rounded-md px-5 py-2 bg-[#6e48aa] hover:bg-[#9d50bb]">
                <a href="../../server/src/logout-route.php">Sair</a>
            </div>
        </div>
    </header>
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)]">
        <div class="w-1/2 mx-auto mt-3 py-3 border-2 border-[#9d50bb] rounded-md text-center text-lg font-bold">
            Registar horário de chegada
        </div>
        <div class="bg-[#6e48aa] text-white font-semibold flex justify-center my-4">
				<?php
					if(isset($_SESSION["message"]) ) {
						echo $_SESSION["message"];
						unset($_SESSION["message"]);
					} 
				?>
		</div>
        <section class="bg-white w-1/2 h-fit mx-auto mt-5 p-6 rounded-lg">
            <form method="post" action="../../server/src/register.php">
                <table class="w-11/12 mx-auto">
                    <tr>
                        <td class="p-3 text-base font-semibold">
                            Nome do funcionário
                        </td>
                        <td class="p-3">
                            <input type="text" name="name" size="30" autocomplete="off" required class="bg-slate-300 px-2 rounded-sm outline-[#6e48aa]" />
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 text-base font-semibold">
                            Foto
                        </td>
                        <td class="p-3">
                            <input type="file" name="name" size="30" autocomplete="off" required class="bg-slate-300 px-2 rounded-sm outline-[#6e48aa]" />
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 text-base font-semibold">
                            Data
                        </td>
                        <td class="p-3">
                            <input type="date" name="birth_date" required class="bg-slate-300 px-2 rounded-sm outline-[#6e48aa]" />
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 text-base font-semibold">
                            Hora de chegada
                        </td>
                        <td>
                        <input type="time" name="start_date" required class="bg-slate-300 px-2 rounded-sm outline-[#6e48aa]" />
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 text-base font-semibold">
                            Número de celular
                        </td>
                        <td class="p-3">
                            <input type="text" value="+258" size="3" autocomplete="off" class="bg-slate-300" disabled /><input type="number" name="phone" required class="bg-slate-300 ml-1 px-2 rounded-sm outline-[#6e48aa]" />
                        </td>
                    </tr>
                </table>
                <div class="mt-5 w-fit mx-auto">
                    <input type="submit" value="Cadastrar" class="bg-[#6e48aa] text-white font-medium px-3 py-2 rounded" />
                    <input type="reset" value="Repor" class="border border-[#6e48aa] text-[#6e48aa] font-medium px-6 py-2 rounded" />
                </div>
            </form>
        </section>
    </main>
    <footer class="bg-[#9d50bb] text-white text-center fixed bottom-0 py-2 w-full">
        <p>&copy; Todos os direitos reservados. Desenvolvido por <strong><a href="https://jay-ubisse.com" target="_blank">Jay Ubisse</a></strong></p>
    </footer>
</body>
</html>