<?php
 require '../config/connect.php';

$name = $_POST['data'];

$sql = "SELECT * FROM employees WHERE name LIKE '%$name%' ORDER BY name";
$result = $dbcon->query($sql);

echo    "<tr>";
echo    "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-2'>Nº</th>";
echo   "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>Nome</th>";
echo   "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>Data de Início</th>";
echo   "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>Número de celular</th>";
echo   "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>Endereço</th>";
echo   "<th class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>Data de Nascimento</th>";
echo   "</tr>";


$index = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-2'>" . $index . "</td>\n";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>". $row['name']. "</td>\n";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>" . $row['start_date'] ."</td>\n";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>" . $row['phone'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>" . $row['address'] . "</td>\n";
        echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'>" . $row['birth_date'] . "</td>\n";
        echo "</tr>";

        $index = $index + 1;
    }        
}  else {
    echo "<tr>";
    echo  "<td class='border-collapse border-2 border-[#6e48aa] py-2 px-5'><strong>Nenhum resultado.</strong></td>\n";
    echo "</tr>";
}
$dbcon->close();
    
?>