<?php
if($_POST){
    $x=$_POST['userroll'];
    $con=mysqli_connect('localhost','root','','student');
    if($con){
        $sq="select * from stud where RollNo=$x;";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            echo "<form>";
            echo "<input type='text' value='".$row['RollNo']."' disabled>";
            echo "<input type='text' value='".$row['Name']."' disabled>";
            echo "<input type='text' value='".$row['Mark']."' disabled>";
            }
    }
}    
?>