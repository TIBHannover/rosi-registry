<?php
/**
* @file db/set-data.php
* uses php mysql library MeekroDB https://meekro.com
*/

require_once '../lib/meekrodb.2.3.class.php';

// get credentials from config.ini.php
$ini = parse_ini_file('../config.ini.php');
DB::$host = $ini['servername'];
DB::$user = $ini['username'];
DB::$password = $ini['password'];
DB::$dbName = $ini['database'];

// array with parameters for db query
$metadata = [];

// read data structure from schema.json
$data_structure = json_decode(file_get_contents("../schemas/schema.json"), true);

// get variables via POST
foreach ($data_structure['properties'] as $element) {

  if($_POST[$element['name']] != null){
    $metadata[$element['name']] = $_POST[$element['name']];
  }
}

// insert or update data into the database
DB::insertUpdate('sources', $metadata);

// ... go back to homepage
header("Location: ../index.php");

?>
