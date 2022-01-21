<?php
    while ( 1 ) {
    	sleep(5);
        echo "Checking if db is up";
	$con=mysqli_connect("rovolang.ml","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
		continue;
	}
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=11");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/usr/app/flag.txt","w");
    fwrite($flagfile,$flag);
    fclose($flagfile);
    echo "Cron successful";
?>
