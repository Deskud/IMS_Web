<?php
// require 'PHP_Database/conne.php';
$servername = 'localhost';
$username = 'root';
$dbname = 'uniform_stocks';
$password = '';

$allData = "";


$datahistory = new mysqli($servername, $username, $password, $dbname);

// $query = "SELECT* FROM product"; //"product" pangalan ng database table

$result = $datahistory->query("SELECT*FROM products");

while($data = $result->fetch_assoc())
    $allData .= $data['ID'].','. $data['student_number'].','. $data['size'].','. $data['sex'].','. $data['time_stamp']."\n";

    $response = "data:text/csv;charset=utf-8 ,ID,STUDENT NUMBER,SIZE,SEX,TIMESTAMP\n";
    $response .= $allData;
   
?>
<div>

<button id= "hisdownl">
    
    <?php
        echo '<a href = "'.$response.'" download="PurchaseHistoryUniform.csv">Download</a>'; 
    ?>
    
</button>

</div>

<div class = "purchaseHistory">
        <table>
            <tr>
                 <th>ID</th>
                 <th>STUDENT NUMBER</th>
                 <th>SIZE</th>
                 <th>SEX</th>
                 <th>TIMESTAMP</th>
            </tr>
            <tr>
                <?php
                foreach($result as $row)
                {
                    ?>
                        <td><?php echo $row['ID'] ?></td>
                        <td><?php echo $row['student_number'] ?></td>
                        <td><?php echo $row['size'] ?></td>
                        <td><?php echo $row['sex'] ?></td>
                        <td><?php echo $row['time_stamp'] ?></td>
                    </tr>
                    <?php
                }
                ?>
           
        </table>
 </div>
 

