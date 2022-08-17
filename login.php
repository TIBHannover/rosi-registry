<?php
/**
* @file login.php
* Display form for password login
* uses alpaca http://alpacajs.org
*/

/* adding to registry has been disabled */
header('Location: index.php');
exit;

// variables
session_start();
$errorMsg = '';
$valid = $_SESSION['login'] === true;
isset($_GET['sourceId']) ? $param = "?sourceId=".$_GET['sourceId'] : $param = "";
$action = 'login.php'.$param;

// read password from config
$config = json_decode(file_get_contents("config.json"), true);

if(isset($_POST['submit'])) {
  $valid = $_POST['password'] == $config['password'];
  if(!$valid) $errorMsg = 'Invalid password.';
  else $_SESSION['login'] = true;
}
if($valid) {
   header('Location: form.php'.$param); die();
}
$lib = 'alpaca';
require_once('includes/header.php');
?>

<div class='container'>
  <!-- sceleton for the form -->
  <form name='input' action=<?= $action ?> method='post'>
      <div class='container'>
          <div id='form'></div> <!-- alpaca will fill in the form in this div -->
          <div class='error'><?= $errorMsg ?></div>
          <a href='javascript:history.back()'>Cancel</a>
          <input type='submit' value='Submit' name='submit'>
      </div>
  </form>
</div>

<script type="text/javascript">
  $("#form").alpaca({
      "schema": {
          "format": "password"
      },
      "options": {
        "label": "Password",
        "name": "password"
      }
  });
</script>

<?php
  require_once("includes/footer.php");
?>
