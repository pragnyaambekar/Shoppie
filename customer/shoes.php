
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="customer.css">
    <title>Shoes</title>
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
            <div id="myNavbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <?php
$con = mysqli_connect("localhost","root","","book") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location: customer.php");

}
$query = "select * from product where category='Shoes'";
$result = mysqli_query($con,$query);
while ( $row= mysqli_fetch_array($result)){?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <h2><?php echo $row['pname'];?></h2>
        <?php if($row['discount'] == 0){?>
            <?php echo "Original Price:₹". $row['price'];?><br>
            <?php echo "No discount";?><br>
            <?php echo "Sale Price:₹". $row['price'];
            }else{?>
                <s><?php echo "Original Price: ₹". $row['price'];?></s><br>
                <?php echo "Discount:".$row['discount']."%";?><br>
                <?php echo "Sale Price:₹".(($row['price'] )- ($row['price'] * ($row['discount'])/100));
            }?>
           <br> <button class="btn btn-primary" >Add to Cart</button>
        </div>
<?php }?>