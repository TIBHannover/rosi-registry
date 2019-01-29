<?php

// preparations
include 'config.php';
$con = mysqli_connect($servername, $username, $password, $database);

// get variables via POST
$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$link = mysqli_real_escape_string($con, $_POST['link']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$image_url = mysqli_real_escape_string($con, $_POST['image_url']);

// check if there is an id and ...
if(isset($_POST['id']) && $_POST['id'] != null){

  // ... update the existing entry
  $sql = "UPDATE sources SET name = '".$name."', link = '".$link."', description = '".$description."', image_url = '".$image_url."'
   WHERE id = ".$id;

}else {

  // ... or create a new one
  $sql = "INSERT INTO sources (name, link, description, image_url) VALUES ('".$name."', '".$link."', '".$description."', '".$image_url."')";
}

// execute the query and ...
if (mysqli_query($con, $sql)){

  // ... go back to homepage
  header("Location: index.php");

}else {
  // ... or echo error
  echo mysqli_error($con);
}

// closing
mysqli_close($con);

?>
