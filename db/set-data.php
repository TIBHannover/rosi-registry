<?php
/**
* @file db/set-data.php
*/

// read config
$config = json_decode(file_get_contents('../config.json'), true);

// read existing dataset from local
$data = json_decode(file_get_contents('../data/data.json'), true);

// read data structure from source.json
$data_structure = json_decode(file_get_contents("../schemas/source.json"), true);

// create empty metadata array
$metadata = [];

// get metadata via POST
foreach ($data_structure['properties'] as $element) {
  if(isset($_POST[$element['name']])){
    $metadata[$element['name']] = $_POST[$element['name']];
  }
}

// edit existing entry
if(isset($metadata['id'])){

  // overwrite metadata entry with new data
  $data[$metadata['id']] = $metadata;

}else {

  // add new id
  $metadata['id'] = count($data);

  // add new data to data array
  array_push($data, $metadata);

}

// write to file
file_put_contents('../data/data.json', json_encode($data, JSON_PRETTY_PRINT));

// set git user
echo shell_exec('git config user.email "'.$config['git_email'].'"');
echo shell_exec('git config user.name "'.$config['git_user'].'"');

// create git commit
echo shell_exec('git add ../data/data.json');
echo shell_exec('git commit -m "data updated"'); // .date(Y-m-d H:i:s)

//echo shell_exec('git push origin remote');

// go back to homepage
header("Location: ../index.php");

?>
