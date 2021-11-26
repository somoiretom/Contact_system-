<?php

require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


try {
    $sql = 'INSERT INTO user(name,email,message)
VALUES(?,?,?)';

$cmd = $db->prepare($sql);
$cmd->execute([$name,$email,$message]);
$_SESSION['success'] = "Message Sent";
header('location: index.php');
}
catch(PDOException $e) {
    echo $e->getMessage();
}
}