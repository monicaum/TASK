<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dashboard.php" method="post">
        <button type="submit" name="lgbtn">LOGOUT</button>
    </form>
</body>
</html>
<?php
session_start();
echo $_SESSION['username'];
echo $_SESSION['password'];
echo '<table border="2"><tr><th>USERNAME</th><th>PASSWORD</th><th>EMAIL</th></tr>';
include 'config.php';
    $sel=mysqli_query($con,"select * from std_value where name='$_SESSION[username]' and password='$_SESSION[password]'  ");
    while($row=mysqli_fetch_assoc($sel))
    {
        
        ?>
            <tr><td><?php echo $row['name']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td></tr>

        <?php
    }
    echo '</table>';

?>
<?php
if(isset($_POST['lgbtn']))
{
session_destroy();
echo '<script>alert("Logoutsuccess");window.location.href="index.php";</script>';

}
?>