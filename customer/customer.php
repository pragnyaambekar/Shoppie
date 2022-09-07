<?php
$con = mysqli_connect("localhost","root","","book") or die(mysqli_error($con));
session_start();
/*if(isset($_SESSION['name'])){
    header("Location:../home/home.php");

}*/
?>

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
    <title>Login</title>
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
                <a href="#" class="navbar-brand">Shoppie</a>
            </div>
            <div id="myNavbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="customer.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=" container-fluid">
        <div class="row1">
            <form method="post" action="customer.php">
                <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h2>Login</h2>
                            </center>
                        </div>
                        <div class="panel-body">
                            <label for="email" class="form-label email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                required>
                        </div>
                        <div class="panel-body">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter your password" pattern=".{6,}" required>
                        </div>
                        <center><button type="submit" class="btn" name="submit">Login</button>
                            <h5>Dont have an account? <a href="signup.php">Signup here</a> </h5>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    // validation of email and password*/
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $password =md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    $email_password_check = "select * from register where email='$email' and password = '$password'";
    $email_password_result = mysqli_query($con,$email_password_check);
    if(mysqli_num_rows($email_password_result)){
        $pass = mysqli_fetch_array($email_password_result);
        if($pass['password']==$password){
            $user = "select id,name,email,password from register where email='$email'";
            $user_result = mysqli_query($con,$user);
            $user_fetch = mysqli_fetch_array($user_result) or die(mysqli_error($con));
            $_SESSION['name'] = $user_fetch['name'];
            $_SESSION['password'] = $user_fetch['password'];
            $_SESSION['email'] = $user_fetch['email'];
            $_SESSION['id'] = $user_fetch['id'];
            header("location:cscreen.php");
        }
        else{
            echo"<center><h4>Incorrect password</h4></center>";
        }
    }
    else{
        echo"<center><h3>Incorrect email or password. New user? <button class='btn signup'><a href='cscreen.php' >Signup here</a></button><h3><center>";
    }
   
    


}

?>