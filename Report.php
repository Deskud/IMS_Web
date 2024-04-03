<?php
    session_start();

    $user = ( $_SESSION['admin']);
    if(!isset($_SESSION['admin'])) header('location: Login.php');
     $user = $_SESSION['admin'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Vending Machine IMS </title>

        <link rel="stylesheet" type="text/css" href="css/IMSstyle.css">
        <script src="https://kit.fontawesome.com/883b8ee9d9.js" crossorigin="anonymous"></script>
        
    </head>
    <body id="DashboardBG">
        <div id="dashboardMainContainer">
            <?php include ('Parts/dash_sidebar.php')?>
            <div class="dashboardContent_Container" id="dashboardContent_Container">
            <?php include ('Parts/dash_topnav.php')?>
                <div class="dashboardContent">
                    <div class="dashboardContent_Main">

                    </div>
                </div>

            </div>
        </div>
    <script src="DashboardScripts.js"></script>
    </body>
</html>