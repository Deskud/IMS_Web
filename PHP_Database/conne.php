<?php
   
    $servername = 'localhost';
    $username = 'root';
    $password = '';


    try{

        $db1 = new PDO("mysql:host=$servername;dbname=uniform_stocks", $username, $password);
        $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(\Exception $e){
        $error_message = $e ->getMessage();

    }
?>