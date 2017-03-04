<?php
$con=mysql_connect('localhost', 'root', '') or die('Database connection failed!');

if($con){
	mysql_select_db('ohms_db', $con) or die('No database found');
}

?>



