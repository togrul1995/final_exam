<?php
$db_host='localhost';
$username ='root';
$password = '';
$db_name = 'final';

$db_con = mysqli_connect($db_host, $username, $password, $db_name);

if ($db_con) {
	echo "Yuklendi";
}else{
	echo "error";
}
?>