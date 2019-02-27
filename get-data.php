<?php

// php mysql library MeekroDB https://meekro.com
require_once 'lib/meekrodb.2.3.class.php';

// get credentials from config
include 'config.php';
DB::$host = $servername ;
DB::$user = $username;
DB::$password = $password ;
DB::$dbName = $database;

// create query depending on parameters
if (isset($_POST['sourceId']) && is_numeric($_POST['sourceId'])){
  $sql = "SELECT * FROM sources WHERE  id = ".$_POST['sourceId'];
}
elseif (isset($_GET['sourceId']) && is_numeric($_GET['sourceId'])) {
  $sql = "SELECT * FROM sources WHERE  id = ".$_GET['sourceId'];
}
else{
  $sql = "SELECT * FROM sources";
}

// get and handle result
$results = DB::query($sql);

foreach ($results as $row) {
  $sources[] = $row;
}

// return result
echo json_encode($sources);

?>
