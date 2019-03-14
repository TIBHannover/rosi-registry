<?php
/**
* @file db/set-data.php
*/

// read existing dataset TODO from remote?
$data = file_get_contents('../data/data.json');
$data = json_decode($data);

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
echo shell_exec('git config user.email "rosi.project@tib.eu"');
echo shell_exec('git config user.name "ROSI"');

// create git commit
// echo shell_exec('git checkout -b data'); // TODO branch
echo shell_exec('git add ../data/data.json');
echo shell_exec('git commit -m "data updated"'); // .date(Y-m-d H:i:s)

// echo shell_exec('git push origin data'); // TODO git push

// ... go back to homepage
header("Location: ../index.php");

?>
