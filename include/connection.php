<?php

$mysqli = new mysqli('127.0.0.1', 'root', '', 'data');


  if(!$mysqli) {
    echo "Host information".$mysqli->host_info;
    echo '<br>';
    echo 'Protocol version: '.$mysqli->protocol_version;
  }else {

  }


  // $mysqli->close(); //ERROR: mysqli query Couldn't fetch mysqli


?>