<?php
/**
* @file db/set-data.php
*/

// read config
$config = json_decode(file_get_contents('../config.json'), true);

// read existing dataset from local json file
$json = json_decode(file_get_contents('../data/data.json'), true);
// handle empty json file
$data = (isset($json)) ? $json : [];

// read data structure from source.json
$data_structure = json_decode(file_get_contents("../schemas/schema.json"), true);

// create empty metadata array
$metadata = [];

// get data via POST and store in array
foreach ($data_structure['properties'] as $element) {
  if(isset($_POST[$element['name']])){
    $metadata[$element['name']] = $_POST[$element['name']];
  }
}

// commit message
$commit_message = $metadata['name'];

// add new entry
if($metadata['id'] == null){
  $metadata['id'] = (string)count($data);
  array_push($data, $metadata);
  $commit_message .= " added";
}else{
  // change exising entry
   $data[$metadata['id']] = $metadata;
   $commit_message .= " updated";
}

// write to file
file_put_contents('../data/data.json', json_encode($data, JSON_PRETTY_PRINT));

// set git user
echo shell_exec('git config user.email "'.$config['git_email'].'"');
echo shell_exec('git config user.name "'.$config['git_user'].'"');

// git commit and push
echo shell_exec('git add ../data/data.json');
echo shell_exec('git commit -m "'.$commit_message.'"');
echo shell_exec('git push origin master');

// go back to homepage
header("Location: ../index.php");

?>
