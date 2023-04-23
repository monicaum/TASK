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
                    <h3>REGISTRATION</h3>
                    <form action="php06.php" method="post" class="">
                        <label for="" class="form-label">name</label>
                        <input type="text" name="user" class="form-control" id="">
                        <label for="" class="form-label">password</label>
                        <input type="password" name="pass" class="form-control mb-3" id="">
                        <label for="" class="form-label">email</label>
                        <input type="email" name="email" class="form-control mb-3" id="">
                        <input type="submit" name="btn" value="submit"  class="btn btn-success">
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
    $sel=mysqli_query($con,"select * from std_value where email='$_POST[email]' and password='$_POST[pass]' ");
    
    if(mysqli_num_rows($sel)==1)
    {
        $_SESSION['email']=$_POST['email'];
        $_SESSION['password']=$_POST['pass'];

        echo '<script>alert(" Already Registered ")</script>';
    }
    
    else
    {
       $insert=mysqli_query($con,"insert into std_value(name,password,email) values('$_POST[user]','$_POST[pass]','$_POST[email]')");
       if($insert)
       {
          echo"<script>
                alert('Registration Successful');
              </script>";
       }
    }
}
?>