<?php

$sql = "SELECT * FROM $table_str  order by c19 desc, c11 desc, CONVERT(c15,UNSIGNED),c12 desc  ";

$retval = mysql_query($sql, $conn);
if(!$retval)
{
	die('Could not get data: ' . mysql_error());
}
$append_arr = array();

while($listItem = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	$row_array['c_id'] = $listItem['c_id'];


	for ($i = 1; $i<=$colCnt; $i++) {
	    $row_array['c'.$i] = $listItem['c'.$i];
	}

	array_push($append_arr,$row_array);// stopped here -> have to makeit appear on table
}

$return_arr = array('list'=>$append_arr);
echo json_encode($return_arr);


mysql_close($conn);

?>