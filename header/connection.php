<?php

$db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'barber';
  $db_port = 8889;

$conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
	$db_port
  );

if (!$conn) {
	echo "Connection tidak berjaya!";
	exit();
}


?>