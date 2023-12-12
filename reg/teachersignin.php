<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div id="sind">
<center>
    <h2>Teacher Login</h2><hr>
    <form action="" method="post" >
        Username: <input type="text" name="tname"> <br><br>

        Password:<input type="password" name="tpass"><br><br>

        <input type="submit" value="Login"><br><br>
</center>
</form>
</div>
</body>
</html>

<?php
include 'conn.php';
if($_POST){
    $tname=$_POST['tname'];
    $tpass=$_POST['tpass'];
    if($con){
        $sq="select * from teacher where tname='$tname' and password='$tpass'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            echo "<a href='stds.php' target='_top'>Go to Home</a>";
        }    
        else{
            echo "Account not detected.";
        }
    }
}
?>
