
<?php
    while ( 1 ) {
    	sleep(5);
        echo "Checking if db is up";
	$con=mysqli_connect("db_flag","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
		continue;
	}
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=3");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/var/www/html/i_am_not_a_robot.txt","w");
    $txt=$flag;
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>
