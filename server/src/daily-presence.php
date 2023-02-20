<?php
    require "../config/connect.php";
    session_start();

    $name = $_POST["name"];
    $work_day = $_POST["work_day"];
    $entry_time = $_POST["entry_time"];
    $arrival_time = $_POST["arrival_time"];
    $phone = $_POST["phone"];
    $fileName = basename($_FILES["image"]["name"]);

    echo $name . "\n";
    echo $work_day . "\n";
    echo $entry_time . "\n";
    echo $arrival_time . "\n";
    echo $phone . "\n";
    echo $fileName . "\n";
?>