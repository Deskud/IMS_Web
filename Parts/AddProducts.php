<?php
   
    include 'PHP_Database/conne2.php';

    if(isset($_POST['Add'])){


        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $product_size = $_POST['size'];
        $product_quantity = $_POST['quantity'];



        if(empty($product_name)|| empty($product_price)){
            $message[] = 'Please fill out the following';

        }
        else{
            $insert = "INSERT INTO uniform_products(product_name, price, product_size, product_quantity) VALUES('$product_name', '$product_price', '$product_size', '$product_quantity')"; 

            $adding = mysqli_query($dbADD, $insert);

            if($adding){// If the addition of the product is successfull say this
                $message[] = 'Product added successfully';

            }
            else{ //Check errors
                $message[] = 'Bruh';

            }
        }
    };

    //Shows error message -> look at line 12
    if(isset($message)){
        foreach($message as $message){
            echo'<span class="message">'.$message.'</span>';

        }
    } 

    //Deletes the data from table and the database. Basis is id/product_id
    if(isset($_GET['delete'])){ 
        $id = $_GET['delete'];
        mysqli_query($dbADD, "DELETE FROM uniform_products WHERE product_id = $id");
        header('location:Products.php');

    }
?>



<div class=Product_container>
    <div class="AddProd">
        <form action="" method="post" enctype='multipart/form-data'>
            <h1>Add Products</h3>
            <input type="text" placeholder="Enter Product" name="name" class="boxprod">
            <input type="number" placeholder="Enter Price" name="price" class="boxprice">
            <input type="number" placeholder="Enter Quantity" name="quantity" class="boxquantity">

                <select class="selectsize" name="size">
                <option selected>Select Uniform Size</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra Large">Extra Large</option>
                </select>



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
                Product Id
            </td>
            <td>
                Product Name
            </td>
            <td>
                Product Price
            </td>
            <td>
                Product Size
            </td>
            <td>
                Product Quantity
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
                    <?php echo $row['product_id'] ?>
                </td>
                <td>
                    <?php echo $row['product_name'] ?>
                </td>
                <td>
                    P<?php echo $row['price'] ?>
                </td>
                <td>
                    <?php echo $row['product_size'] ?>
                </td>
                <td>
                    <?php echo $row['product_quantity'] ?>
                </td>
                <td>
                    <a href="AdminEdit.php?edit=<?php echo $row['product_id'];?>"class="btnEdit"><i class="fa-solid fa-pen-to-square"></i>Edit</i></a>
                    <a href="Products.php?delete=<?php echo $row['product_id'];?>"class="btnEdit"><i class="fa-solid fa-trash"></i>Delete</i></a>
                </td>
            
            </tr>
    <?php };?>
    </table>

</div>







