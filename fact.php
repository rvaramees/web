<?php
$n=$_POST['unum'];
$fact=1;
for($i=1;$i<=$n;$i++)
    $fact*=$i;
echo $fact;
?>
