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
    <h2>Student Login</h2><hr>
    <form action="" method="post" >
        KTU Id: <input type="text" name="ktulid"> <br><br>

        Password:<input type="password" name="upass"><br><br>

        <input type="submit" value="Login"><br><br>
        No account,<a href="Signup.php">Register</a><br></center>
</form>
</div>
</body>
</html>

<?php
include 'conn.php';
if($_POST){
    $ktuid=$_POST['ktulid'];
    $pass=$_POST['upass'];
    if($con){
        $sq="select * from ktuacc where KTU_Id='$ktuid' and Password='$pass'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            echo "<a href='loginhome.php' target='_top'>Go to Home</a>";
        }    
        else{
            echo "Account not detected.";
            echo "<a href='Signup.php'>Signup</a>";
        }
    }
}
?>


