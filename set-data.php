<?php

include 'config.php';

$con = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO sources (name, link, description, image_url)
VALUES ('".$_POST['name']."', '".$_POST['link']."', '".$_POST['description']."', '".$_POST['image_url']."')";

if (mysqli_query($con, $sql)){

  header("Location: index.php");

}else {

  echo mysqli_error($con);

}

mysqli_close($con);

?>
