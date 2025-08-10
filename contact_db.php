<?php
header('Content-Type: text/html; charset=UTF-8');
include('server.php');

    $name=filter_input(INPUT_POST,'name') ?? null;
    $email=filter_input(INPUT_POST,'email') ?? null;
    $message=filter_input(INPUT_POST,'message') ?? null;
    $content_date_time=date('Y-m-d H:i:s');
    $sql = "INSERT INTO `contect`(`name`, `email`, `comment`, `content_date_time`) VALUES ('{$name}','{$email}','{$message}','{$content_date_time}')";
    mysqli_query($conn, $sql);

    header('location: contact.php');
?>