<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'data');

// $db_host = "127.0.0.1";
// $db_user = "root";
// $db_password = "";
// $db_db = "data";

// $mysqli = @new mysqli(
//   $db_host,
//   $db_user,
//   $db_password,
//   $db_db
// );

  echo 'Berjaya: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  // $mysqli->close(); //ERROR: mysqli query Couldn't fetch mysqli


?>