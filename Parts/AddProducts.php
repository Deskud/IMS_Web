<?php
   
    include 'PHP_Database/conne2.php';

    if(isset($_POST['Add'])){

        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        if(empty($product_name)|| empty($product_price)){
            $message[] = 'Please fill out the following';

        }
        else{
            $insert = "INSERT INTO uniform_products(Name, Price) VALUES('$product_name', '$product_price')";

            $adding = mysqli_query($dbADD, $insert);

            if($adding){
                $message[] = 'Product added successfully';

            }
            else{
                $message[] = 'Bruh';

            }
        }
    };

    if(isset($message)){
        foreach($message as $message){
            echo'<span class="message">'.$message.'</span>';

        }
    } 

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($dbADD, "DELETE FROM uniform_products WHERE ID = $id");
        header('location:Products.php');

    }

?>



<div class=Product_container>
    <div class="AddProd">
        <form action="" method="post" enctype='multipart/form-data'>
            <h1>Add Products</h3>
            <input type="text" placeholder="Enter Product" name="product_name" class="boxprod">
            <input type="number" placeholder="Enter Price" name="product_price" class="boxprice">
            <input type="submit" name="Add" class="Addbutton">
        </form>
       
    </div>
</div>




<?php

$select = mysqli_query($dbADD, "SELECT * FROM uniform_products");
?>


<div class= "Productaddtable">
    <table class="display_added_prod">
        <tr>
            <td>
                Product Name
            </td>
            <td>
                Product Price
            </td>
            <td colspan="2">
                Action
            </td>
        </tr>

        <?php

    while($row = mysqli_fetch_assoc($select)){
    ?>     
            <tr>
                <td>
                    <?php echo $row['Name'] ?>
                </td>
                <td>
                    P<?php echo $row['Price'] ?>
                </td>
                <td>
                    <a href="AdminEdit.php?edit=<?php echo $row['ID'];?>"class="btnEdit"><i class="fa-solid fa-pen-to-square"></i>Edit</i></a>
                    <a href="Products.php?delete=<?php echo $row['ID'];?>"class="btnEdit"><i class="fa-solid fa-trash"></i>Delete</i></a>
                </td>
            
            </tr>
    <?php };?>
    </table>

</div>







