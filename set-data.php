<?php

// php mysql library MeekroDB https://meekro.com
require_once 'lib/meekrodb.2.3.class.php';

// get credentials from config
include 'config.php';
DB::$host = $servername ;
DB::$user = $username;
DB::$password = $password ;
DB::$dbName = $database;

// get variables via POST
$metadata = array(
  'name' => $_POST['name'],
  'link' => $_POST['link'],
  'description' => $_POST['description'],
  'image_url' => $_POST['image_url'],
  'entity' => $_POST['entity'],
  'licence' => $_POST['licence'],
);

// check of there is an id
if(isset($_POST['id']) && $_POST['id'] != null){
  $metadata['id'] = $_POST['id'];
}

// insert or update data into the database
DB::insertUpdate('sources', $metadata);

// ... go back to homepage
header("Location: index.php");

?>
