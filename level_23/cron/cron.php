<?php
    while ( 1 ) {
        echo "Checking if db_level_23 is up";
        $con2=mysqli_connect("db_level_23","cyber","cyberishere","members");
        if ( !$con2 ) {
            sleep(5);
        }
        else{
            break;
        }
    }
    while ( 1 ) {
        echo "Checking if rovolang.ml is up";
	$con=mysqli_connect("rovolang.ml","cyberlabs","CYB3RL4BS_!!FLAgs!","flag_storage");
	if ( !$con ) {
        sleep(5);
		continue;
	}
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=23");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $query2=mysqli_query($con2, "UPDATE s3cr3t SET flag='".$flag."' WHERE 1");
?>