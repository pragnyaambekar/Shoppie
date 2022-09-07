<?php
$con = mysqli_connect("localhost","root","","book") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location: customer.php");

}

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
    <link rel="stylesheet" href="customer.css">
    <title>home</title>
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
    </nav>
    <h1 style="margin-left:30px"><?php echo "Hello ".$_SESSION['name']."!"; ?></h1>
    
    
    <h1>Categories</h1>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        
        <img class="card-img-top" width="200" height="150" src="mobiles.jpg" alt="Mobile">
        
            <h5 class="card-title">Mobiles</h5>
            <p class="card-text">Something about mobiles</p>
            <a href="mobiles.php" class="btn btn-primary">Check</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        
        <img class="card-img-top" width="200" height="150" src="laptop.jpg" alt="Mobile">
        
            <h5 class="card-title">Laptop</h5>
            <p class="card-text">Something about laptop</p>
            <a href="laptop.php" class="btn btn-primary">Check</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        
        <img class="card-img-top" width="200" height="150" src="shoes.jpg" alt="Mobile">
        
            <h5 class="card-title">Shoes</h5>
            <p class="card-text">Something about shoes</p>
            <a href="shoes.php" class="btn btn-primary">Check</a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        
        <img class="card-img-top" width="250" height="150" src="acce.jpg" alt="Mobile">
        
            <h5 class="card-title">Accesories</h5>
            <p class="card-text">Something about Accesories</p>
            <a href="acce.php" class="btn btn-primary">Check</a>
    </div>
    
</body>

</html>