<?php
    while ( 1 ) {
        echo "Checking if rovolang.ml is up";
	$con=mysqli_connect("rovolang.ml","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
        sleep(5);
		continue;
	}
        sleep(2);
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=4");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $flagfile=fopen("/var/www/html/sup3r_s3cr37_d3f1n1t3ly_c4n7_gu3ss.txt","w");
    $txt=$flag;
    fwrite($flagfile,$txt);
    fclose($flagfile);
?>