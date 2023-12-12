<?php
    include 'conn.php';
    if($con){
        if($_POST){
            $smark1=$_POST['upmark1'];
            $smark2=$_POST['upmark2'];
            $assign1=$_POST['assign1'];
            $assign2=$_POST['assign2'];
            $attend=$_POST['att'];
            $int=0;
            $smark=(($smark1+$smark2)/100)*20;
            $assign=(($assign1+$assign2)/2);
            if($attend>90){
                $att=8;
            }    
            elseif ($attend>80) {
                $att=7;
            }
            elseif ($attend>75) {
                $att=6;
            }
            else{
                echo "Not eligible for exam".'<br>';
            }    
            $int=$smark+$assign+$att;
            $mq="UPDATE `ktumarks` SET `Series_1` = '$smark1', `Series_2` = '$smark2', `Assignment_1` = '$assign1', `Assignment_2` = '$assign2', `Attendance` = '$attend' WHERE `ktumarks`.`KTU_ID` = 'TVE23MCA-2035' and `Subject` = 'ASE';";
            $me=mysqli_query($con,$mq);  
            $mm="UPDATE `ktumarks` SET `Internal` = '$int' where `KTU_ID` = 'TVE23MCA-2035' and `Subject`='ASE';";
            $mmq=mysqli_query($con,$mm);
        }
        $sq="select * from ktumarks where KTU_Id='TVE23MCA-2035' and Subject ='ASE'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            echo "<form id='update' action='' name='update' method='post'>";
            echo "<table border=1><center><h2>".$row['Subject']."</h2></center><tr><th>KTU Id</th><th>Series_1</th><th>Series_2</th></tr>";
            echo "<tr><td><input type='text' value='".$row['KTU_ID']."'disabled></td>";
            echo "<td><input type='number' value='".$row['Series_1']."'name='upmark1'></td>";
            echo "<td><input type='number' value='".$row['Series_2']."' name='upmark2'></td></tr>";
            echo "<tr><th>Assignment_1</th><th>Assignment_2</th><th>Attendance</th></tr><tr><td><input type='number' value='".$row['Assignment_1']."' name='assign1'></td><td><input type='number' value='".$row['Assignment_2']."' name='assign2'></td><td><input type='number' value='".$row['Attendance']."' name='att'></td></tr>";
            echo"<th colspan='3'>Internal mark</th></tr><tr><td colspan='3'><input type='number' value='".$row['Internal']."'><input type='submit' value='Update'></td></tr></table>";
            echo "</form>";
        }
        
    }
  ?>          