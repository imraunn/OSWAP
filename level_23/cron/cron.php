<?php
    $con=mysqli_connect("db_flag","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage") or die(mysql_error());
    $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=23");
    $row = mysqli_fetch_array($query);
    $flag=$row['flag'];

    $con2=mysqli_connect("db_level_23","cyber","cyberishere","members") or die(mysql_error());
    $query2=mysqli_query($con2, "UPDATE s3cr3t SET flag='".$flag."' WHERE 1");
?>