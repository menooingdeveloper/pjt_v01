
<?php

//getting the data from input, datatype:json

//the data itself stored in separate variables for code readability
$wstr = $data['c20'];
$wstr = trim($wstr);

//add
if ( $mode_type == "RESET"){
	$sql = "UPDATE $table_str SET  c11 = 'TBD' , c12 = 'TBD' " ;
}

if ( $mode_type == "WEEK"){	
	$sql = "UPDATE $table_str SET  c20	 = '".$wstr ."' " ;

}


$retval_in = mysql_query($sql, $conn);
if(!$retval_in)
{
die('Could not $mode_type data: ' . mysql_error());
}

mysql_close($conn);
echo $sql ;



?>