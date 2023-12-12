<?php
include 'conn.php';
if($_POST){
    $ktuid=$_POST['ktuid'];
    $email=$_POST['email'];
    $prg=$_POST['cors'];
    $username=$_POST['uname'];
    $password=$_POST['rpass'];
    $chckpass=$_POST['rpass2'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    if($con){
        if($password==$chckpass){
            $rq="insert into ktuacc(KTU_ID,FirstName,LastName,Email,Program,Username,Password) values('$ktuid','$fname','$lname','$email','$prg','$username','$password')";
            $rs=mysqli_query($con,$rq);
            if($rs){
                $res="Account created";
            }
        }
        else{
            echo "<script>alert('Passwords do not match')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account created</title>
</head>
<body>
    <center>
    <h2><?php 
    echo "$res";
    ?></h2>
    <a href="signin.php">Go to Login page</a>
</center>
</body>
</html>