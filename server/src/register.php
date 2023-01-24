<?php
    require "../config/connect.php";
    session_start();

        $name = $_POST["name"];
        $birth_date = $_POST["birth_date"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $start_date = $_POST["start_date"];

        $query = "INSERT INTO employees (name, birth_date, phone, address, start_date) 
                                    VALUES ('$name', '$birth_date', $phone, '$address', '$start_date')";
        $result = $dbcon->query($query);

        if($result) {
            $_SESSION['message'] = "Funcionário cadastrado com sucesso.";
            header("location: ../../client/register/");
        } else {
            $_SESSION['message'] = "Erro ao cadastrar funcionário. Tente de novo.";
            header("location: ../../client/register/");
        }
        $dbcon->close();
?>
