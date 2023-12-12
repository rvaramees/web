<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Select</title>
</head>
<body>
<div id="sind">
<center>
    <h2>Select Student</h2><hr>
    <form action="loginhome.php" method="post" >
        KTU Id:<input type="text" name="ktu">

        <input type="submit" value="Select"><br><br>
</center>
</form>
</div>
</body>
</html>
<?php
include 'conn.php';
if($_POST){
    $ktu=$_POST['ktu'];
    if($con){
        $sq="select * from ktumarks where `KTU_ID`= '$ktu'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
        }    
        else{
            echo "Account not detected.";
        }
    }
}
?>