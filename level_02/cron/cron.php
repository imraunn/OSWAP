<?php
    while ( 1 ) {
        echo "Checking if db_flag is up";
	$con=mysqli_connect("db_flag","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
        sleep(5);
		continue;
	}
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=2");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/var/www/html/s3cr3t.js","w");
    $txt="let flag = '".$flag."';";
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>