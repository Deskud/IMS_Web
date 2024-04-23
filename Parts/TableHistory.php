<?php
require 'PHP_Database/conne.php';

// $query = "SELECT* FROM product"; //"product" pangalan ng database table
$result = $db1->query("SELECT*FROM products");
?>

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