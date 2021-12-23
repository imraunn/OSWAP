<?php
    $con=mysqli_connect("db_flag","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage") or die(mysql_error());
    $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=5");
    $row = mysqli_fetch_array($query);
    $flag=$row['flag'];
    $flagfile=fopen("/var/www/html/images/flag.txt","w");
    $txt=$flag;
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>