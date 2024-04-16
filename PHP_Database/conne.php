<?php
   
   $servername = 'localhost';
    $username = 'root';
    $password = '';


    try{

        $db1 = new PDO("mysql:host=$servername;dbname=uniform_inventory", $username, $password);
        // $db2 = mysqli_connect("localhost", "root", "", "uniform_inventory");
      
        

        $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(\Exception $e){
        $error_message = $e ->getMessage();

    }
?>