<?php
include 'config.php';
$ins=mysqli_query($con,"select * from std_value");
$row=mysqli_num_rows($ins);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="./css/bootstrap.min.css">

</head>
<body>
<div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="bg-primary text-center p-5">
                    <form action="anu.php" method="post" class="">
                        <label for="" class="form-label" style="color:white;">total no., of students:<?php echo $row;?></label>
                        <br>
                        <input type="submit" name="bt" value="view"  class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<?php
if(isset($_POST['bt']))
{
    echo '<table border="2"><tr><th>USERNAME</th><th>PASSWORD</th><th>EMAIL</th></tr>';
    include 'config.php';   
    $sel=mysqli_query($con,"select * from std_value  ");
    while($row=mysqli_fetch_assoc($sel))
    {
                                                                    
        ?>
            <tr><td><?php echo $row['name']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['email']; ?></td></tr>

        <?php
    }
    echo '</table>';
}
?>

