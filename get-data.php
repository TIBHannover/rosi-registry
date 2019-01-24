<?php

  // get credentials from config
  include 'config.php';

  // connect to database
  $con = mysqli_connect($servername, $username, $password, $database);

  // create query depending on parameters
  if (isset($_POST['sourceId'])){
    $sql = "SELECT * FROM sources WHERE  id = ".$_POST['sourceId'];
  }
  elseif (isset( $_GET['sourceId'])) {
    $sql = "SELECT * FROM sources WHERE  id = ".$_GET['sourceId'];
  }
  else{
    $sql = "SELECT * FROM sources";
  }

  // get and handle result
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $sources[] = $row;
  }

  // return result and close database connection
  echo json_encode($sources);
  mysqli_close($con);

?>
