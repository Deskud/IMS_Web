<?php

    session_start();

    if(isset($_SESSION['admin'])) header('location: Dashboard.php');


    if($_POST){
        include('PHP_Database/conne.php');
       $username = $_POST['username'];
       $password = $_POST['password'];

        $query = 'SELECT * FROM admin WHERE admin.email = "'. $username .'" AND admin.password = "'. $password .'" ';
        $stmt = $db1 -> prepare($query);
        $result = $stmt->execute();
        

        if($stmt->rowCount( )> 0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];
            $_SESSION['admin'] = $user;
           

            header('Location: Dashboard.php');
    

        }else $error_message = 'Incorrect password and username';
        
    }




?>
<!DOCTYPE html>
<html>
    <head>
        <title> Vending Machine IMS </title>

        <link rel="stylesheet" type="text/css" href="css/IMSStyle.css">
    </head>
    <body id="loginBody">
    <div class="container" >
        <div class="loginHeader">
            <h1>Uniform Vending Machine IMS</h1>
            <p> Uniform-Inventory Management System</p>
        </div>
        <div class="hrLine"></div>
        <div class="loginBody">
            <form action="Login.php" method="post">
                <div class="loginInputCont">
                    <label for="">Username</label>
                    <input type="text" name="username" type="text"/>
                </div>
                <div class="loginInputCont">
                        <label for="">Password</label>
                        <input type="password" name="password" type="password"/>

                </div>
                <div class="loginButtonCont">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
    </body>

        

</html>
