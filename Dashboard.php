<?php
    session_start();

    $user = ( $_SESSION['admins']);
    if(!isset($_SESSION['admins'])) header('location: Login.php');
     $user = $_SESSION['admins'];

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Vending Machine IMS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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
                        <div>
                            <div class="charts">
                                <table>
                                    <tr>
                                        <th>Product</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                    <?php include('fetch_data.php'); ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>