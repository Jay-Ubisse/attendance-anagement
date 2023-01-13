<?php
    require "../config/connect.php";
    session_start();

        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        // getting user personal data
        $fetchAdminDataQuery = "SELECT * FROM administrators WHERE username = '$username'";
        $adminDataResult = $dbcon->query($fetchAdminDataQuery);

        if ($adminDataResult->num_rows == 0) {
            $_SESSION['auth'] = "Nome de usuário inválido!";
            header("location: ../../client/");
        } else {
            $adminDataRow = $adminDataResult->fetch_assoc();
            $pass =  $adminDataRow['password'];

            if ($pass !== $password) {
                $_SESSION['auth'] = "Palavra-passe inválida!";
                header("location: ../../client/");
            } else {
                $_SESSION['user-data'] = $adminDataRow;
                header("location: ../../client/home");
            }
        }
        $dbcon->close();
?>
