<?php
$con = mysqli_connect("localhost","root","","book") or die(mysqli_error($con));
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar  expand-lg">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../index.php" class="navbar-brand">Shoppie</a>
            </div>
            
        </div>
    </nav>
    
    <?php
        if(isset($_POST['submit'])){
            $product =mysqli_real_escape_string($con,$_POST['product']);
            $price =mysqli_real_escape_string($con,$_POST['price']);
            $category =mysqli_real_escape_string($con,$_POST['category']);
            $discount =mysqli_real_escape_string($con,$_POST['discount']);
            
            $insert_query ="insert into product (pname, price, category,discount) values ('$product', '$price', '$category','$discount')";
            $insert_query_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
            echo"<center>You have successfully</center>";

         
            

        }
        
?>
    <div class=" container-fluid">
        <div class="row1">
            <form method="post" action="admin.php">
                <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h2>Admin Screen</h2>
                            </center>
                        </div>
                        <div class="panel-body">
                            <label for="Product">Product:</label>
                            <input type="text" name="product">
                        </div>
                        <div class="panel-body">
                            <label for="price">Price: </label>
                            <input type="number" name="price">
                        </div>
                        <div class="panel-body">
                            
                            <label for="search" class="form-label search">Category:</label>
                            <select name="category" id="stock">
                                <option value="">Select</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Mobiles">Mobiles</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Accessories">Accessories</option>
                              </select>
                        </div>
                        <div class="panel-body">
                            <label for="discount">Discount: </label>
                            <input type="number" name="discount">
                        </div>
                        <center><button type="submit" class="btn" name="submit">Add</button>
                           
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
        

</body>

</html>