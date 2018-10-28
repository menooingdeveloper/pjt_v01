<?php

include 'inc_db_con.php';
date_default_timezone_set('America/Chicago');


$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('Could not connect: ' . mysql_error());
}


mysql_select_db($dbname);
mysql_query("SET default_character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$postdata = file_get_contents("php://input");
if(!$postdata)
{
	die('Could not read contents of POST request');
}
$data = json_decode($postdata, true); //decoding json into array

$mode_type = $data['mode_type'];
$table_str = "sb_member";
$colCnt = 20;

if ( $mode_type == "LIST"){
	include 'inc_db_list.php';
}else if ($mode_type == "ADD"){
	include 'inc_db_mod.php';
}else if ($mode_type == "MOD"){
  include 'inc_db_mod.php';
}else if ($mode_type == "RESET"){
  include 'inc_db_mgr.php';
}else if ($mode_type == "WEEK"){
  include 'inc_db_mgr.php';
}
/*

CREATE TABLE sb_member (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c1` varchar(45) DEFAULT NULL,
  `c2` varchar(45) DEFAULT NULL,
  `c3` varchar(45) DEFAULT NULL,
  `c4` varchar(45) DEFAULT NULL,
  `c5` varchar(45) DEFAULT NULL,
  `c6` varchar(45) DEFAULT NULL,
  `c7` varchar(45) DEFAULT NULL,
  `c8` varchar(45) DEFAULT NULL,
  `c9` varchar(45) DEFAULT NULL,
  `c10` varchar(45) DEFAULT NULL,
  `c11` varchar(45) DEFAULT NULL,
  `c12` varchar(45) DEFAULT NULL,
  `c13` varchar(45) DEFAULT NULL,
  `c14` varchar(45) DEFAULT NULL,
  `c15` varchar(45) DEFAULT NULL,
  `c16` varchar(45) DEFAULT NULL,
  `c17` varchar(45) DEFAULT NULL,
  `c18` varchar(45) DEFAULT NULL,
  `c19` varchar(45) DEFAULT NULL,
  `c20` varchar(45) DEFAULT NULL,
 

  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



SELECT * FROM kfood.sw_member;

*/
?>