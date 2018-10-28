<?php

//getting the data from input, datatype:json

//the data itself stored in separate variables for code readability

$c_id = $data['c_id'];



//add
if ( $mode_type == "ADD"){
    $qvalStr = "";
    $qStr  = "";
	for ($i = 1; $i<=$colCnt; $i++) {

		$valStr = trim($data['c'.$i]);
		//if ( $valStr == "") continue;

	    $qStr  = $qStr." c".$i." " ;
	    $qvalStr  = $qvalStr." '".$valStr."' " ;
	    if ( $i != $colCnt ){ $qStr  = $qStr." , " ; $qvalStr  = $qvalStr." , " ;}

	}

	$sql = "INSERT INTO $table_str ( ".$qStr." )  VALUES ( ".$qvalStr." ) ;";




//update
}else if ( $mode_type == "MOD"){

    $qvalStr = "";
    $qStr  = "";
	for ($i = 1; $i<=$colCnt; $i++) {

		$valStr = trim($data['c'.$i]);
		//if ( $valStr == "") continue;

	    $qStr  = $qStr." c".$i." = '".$valStr."' " ;

	    if ( $i != $colCnt){ $qStr  = $qStr." , " ; }

	}


	$sql = "UPDATE $table_str SET ".$qStr." WHERE c_id = $c_id ";
}



$retval_in = mysql_query($sql, $conn);
if(!$retval_in)
{
die('Could not $mode_type data: ' . mysql_error());
}

mysql_close($conn);




?>