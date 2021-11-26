<?php

//msql
//msqli 
//PDO -bEST




$host = 'localhost';
$user = 'root';
$database = 'contact';
$password = '';

try {

    $db = new PDO("mysql:$host; dbname= $database", $user,$password); 

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//SILENT,WARNING,EXCEPTION
echo 'connection succesful';

session_start();
}

catch(PDOException $e) {
   echo $e->getMesage();
}