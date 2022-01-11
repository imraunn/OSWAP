<?php
    while ( 1 ) {
        echo "Checking if db_level_24 is up";
        $con2=mysqli_connect("db_level_24","cyber","cyberishere","zoo");
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
        sleep(2);
        $query=mysqli_query($con,"SELECT flag FROM oswap WHERE chall=24");
        $row = mysqli_fetch_array($query);
        $flag=$row['flag'];
	if ( $flag && $flag !== '' ) {
		break;
	}
    }
    $query2=mysqli_query($con2, "UPDATE confidential SET flag='".$flag."' WHERE 1");
?>