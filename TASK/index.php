<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="bg-primary text-center p-5">
                    <h3>Login</h3>
                    <form action="index.php" method="post" class="">
                        <label for="" class="form-label">username</label>
                        <input type="text" name="user" class="form-control" id="">
                        <label for="" class="form-label">password</label>
                        <input type="password" name="pass" class="form-control mb-3" id="">
                        <input type="submit" name="btn" value="Login"  class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
    include 'config.php';
    $sel=mysqli_query($con,"select * from std_value where name='$_POST[user]' and password='$_POST[pass]' ");
    
    if(mysqli_num_rows($sel)==1)
    {
        $_SESSION['username']=$_POST['user'];
        $_SESSION['password']=$_POST['pass'];

        echo '<script>alert("Login successfull");window.location.href="dashboard.php";</script>';
    }
    
}
?>