<?php
    require "../config/connect.php";
    session_start();

    $name = $_POST["name"];
    $work_day = $_POST["work_day"];
    $entry_time = $_POST["entry_time"];
    $arrival_time = $_POST["arrival_time"];
    $phone = $_POST["phone"];

    $fileName = basename($_FILES["image"]["name"]);
    $targetDir = "../../client/assets/images/";
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

     // permitir algumas extensões
     $allowTypes = array('jpg','png','jpeg');
     if(in_array($fileType, $allowTypes)){
 
         // carregar a imagem para o servidor
         if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
 
             // inserir a imagem na base de dados
             $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
             if($insert){
                 $statusMsg = "O ficheiro ".$fileName. " foi carregado com sucesso.";
             }else{
                 $statusMsg = "O carregamento falhou, tente de novo.";
             } 
         }else{
             $statusMsg = "Desculpe, ocorreu um erro ao carregar a imagem";
         }
     }else{
         $statusMsg = 'Apenas ficheiros com as extensões JPG, JPEG, PNG files sao permitidos.';
     }

     echo $statusMsg;
?>