<html>
    <body>
        
</body></html>

<?php
    include 'conn.php';
    if($con){
        if($_POST){
            $ktuid=$_POST['ktulid'];
        }
        $sq="select * from ktuacc where KTU_Id='TVE23MCA-2035'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            // echo "<form action='update.php' name='update' method='post'>";
            echo "<table border=1><tr><th>KTU Id</th><th>Name</th><th>Email</th><th>Program</th><tr>";
            echo "<tr><td><input type='text' value='".$row['KTU_ID']."'disabled></td>";
            echo "<td><input type='text' value='".$row['FirstName']." ".$row['LastName']."'disabled></td>";
            echo "<td><input type='text' value='".$row['Email']."'></td>";
            echo "<td><input type='text' value='".$row['Program']."'></td></tr></table>";
            // echo "</form>";
            // if($_POST['update']){
            //     $mark=$_POST['markupd'];
            //     $uq="update stud set Mark='$mark' where RollNo='$row['RollNo']'";
            // }
        
    }
        
    }  
?>
