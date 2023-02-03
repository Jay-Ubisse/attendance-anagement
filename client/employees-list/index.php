<?php
    require "../../server/config/connect.php";
    session_start();

    $sql = "SELECT * FROM employees ORDER BY name";
    $result = $dbcon->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de funcionários | Gestão de Presenças</title>
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
    <main class="bg-gray-200 p-1 h-[calc(100vh-100px)] flex flex-row gap-4">
        <section class="mt-10 ml-10 w-[75%]">
            <table class="border-collapse border-2 border-[#6e48aa]">
                <tr>
                    <th class="border-collapse border-2 border-[#6e48aa] p-2">Nº</th>
                    <th class="border-collapse border-2 border-[#6e48aa] py-2 px-5">Nome</th>
                    <th class="border-collapse border-2 border-[#6e48aa] py-2 px-5">Data de Início</th>
                    <th class="border-collapse border-2 border-[#6e48aa] py-2 px-5">Número de celular</th>
                    <th class="border-collapse border-2 border-[#6e48aa] py-2 px-5">Endereço</th>
                    <th class="border-collapse border-2 border-[#6e48aa] py-2 px-5">Data de Nascimento</th>
                </tr>
                <?php
                    $index = 1;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td class="border-collapse border-2 border-[#6e48aa] p-2"><?php echo $index; ?></td>
                    <td class="border-collapse border-2 border-[#6e48aa] py-2 px-5"><?php echo $row["name"]; ?></td>
                    <td class="border-collapse border-2 border-[#6e48aa] py-2 px-5"><?php echo $row["start_date"]; ?></td>
                    <td class="border-collapse border-2 border-[#6e48aa] py-2 px-5"><?php echo $row["phone"];  ?></td>
                    <td class="border-collapse border-2 border-[#6e48aa] py-2 px-5"><?php echo $row["address"];  ?></td>
                    <td class="border-collapse border-2 border-[#6e48aa] py-2 px-5"><?php echo $row["birth_date"];  ?></td>
                </tr>
                <?php
                    $index = $index + 1;        
                    } 
                    } else {
                        echo "Nenhum resultado.";
                    }
                    $dbcon->close();
                ?>
            </table>
        </section>
        <section class="border-2 rounded-md border-[#6e48aa] max-h-[300px] p-4 w-[23%] mt-10">
            <label for="filter" class="text-lg font-semibold">Filtrar por:</label>
            <hr class="w-20 bg-[#6e48aa] h-[3px] mb-3 mt-1 font-extrabold rounded" />
            <select name="fiter" id="cars">
                <option value="name">Nome</option>
                <option value="start-date">Data de Início</option>
                <option value="cell">Número de celular</option>
            </select>
            <div class="mt-4">

            </div>
        </section>
    </main>
    <footer class="bg-[#9d50bb] text-white text-center fixed bottom-0 py-2 w-full">
        <p>&copy; Todos os direitos reservados. Desenvolvido por <strong><a href="https://jay-ubisse.com" target="_blank">Jay Ubisse</a></strong></p>
    </footer>
</body>
</html>