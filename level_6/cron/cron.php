<?php
    $con=mysqli_connect("db_flag","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage") or die(mysql_error());
    $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=6");
    $row = mysqli_fetch_array($query);
    $flag=$row['flag'];
    $flagfile=fopen("/var/www/html/flag.php","w");
    $txt="<?php\n\t\$flag=\"".$flag."\";\n?>\n";
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>