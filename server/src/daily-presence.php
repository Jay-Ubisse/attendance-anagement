<?php
    require "../config/connect.php";
    session_start();

    $name = $_POST["name"];
    $work_day = $_POST["work_day"];
    $entry_time = $_POST["entry_time"];
    $arrival_time = $_POST["arrival_time"];
    $workplace = $_POST["workplace"];
    $phone = $_POST["phone"];

    $fileName = basename($_FILES["image"]["name"]);
    $targetDir = "../../client/assets/images/";
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));


    //calcular a diferença de tempo
    $time1= explode(":", $entry_time);
    $time2= explode(":", $arrival_time);

    $hour_difference = $time1[0] - $time2[0];
    $minutes_difference = $time1[1] - $time2[1];

    $is_late = 0;

    if ($hour_difference < 0 ) {
        $is_late = 1;
    } else {
       if(($hour_difference == 0) && ($minutes_difference < 0)) {
        $is_late = 1;
       } else {
        $is_late = 0;
       }
    }


        // permitir algumas extensões
     $allowTypes = array('jpg','png','jpeg');
     if(in_array($fileType, $allowTypes)){
 
         // carregar a imagem para o servidor
         if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
 
             // inserir a imagem na base de dados
             $insert = $dbcon->query("INSERT into daily_table (name, photo, workplace, date, entry_time, arrival_time, is_late, phone) 
                                    VALUES ('$name', '$fileName', '$workplace', '$work_day', '$entry_time', '$arrival_time', $is_late, $phone)");
             if($insert){
                $_SESSION['info'] = "Presença registrada com sucesso.";
                header("location: ../../client/daily-presence/");
             }else{
                $_SESSION['info'] = "Ocorreu um erro ao registrar a presença. Tente de novo.";
                header("location: ../../client/daily-presence/");
             } 
         }else{
            $_SESSION['info'] = "ocorreu um erro ao carregar a imagem Tente de novo.";
            header("location: ../../client/daily-presence/");
         }
     }else{
        $_SESSION['info'] = "Apenas ficheiros com as extensões JPG, JPEG, PNG files sao permitidos.";
        header("location: ../../client/daily-presence/");
     }

     $dbcon->close();

?>