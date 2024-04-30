<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/IMSstyle.css">

    <title>Update Product</title>
</head>
<body>
<?php
                        
    if(isset($message)){
            foreach($message as $message){
            echo'<span class="message">'.$message.'</span>';
                    
        }
    } 
                        
 ?>             
            <div class="Productcontainer">
                <h1>Update Product</h1>
                <div class="AddProd">
                    <form action="" method="post" enctype='multipart/form-data'>
                    <h1>Add Products</h3>
                    <input type="text" placeholder="Enter Product" name="update_name" class="boxprod">
                    <input type="number" placeholder="Enter Price" name="update_price" class="boxprice">
                    <input type="number" placeholder="Enter Quantity" name="update_quantity" class="boxquantity">

                    <select class="selectsize" name="update_size">
                    <option selected>Select Uniform Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="Extra Large">Extra Large</option>
                    </select>
                    <input type="submit" name="Update_Add" value="update_product"  class="Addbutton">
                    <a href="Products.php" class="upbutton">Go Back</a>
                    </form>
            </div>
        </div>
</body>
</html>