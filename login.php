<?php
session_start();
$errorMsg = '';
$validUser = $_SESSION['login'] === true;

if($_GET['sourceId']){
  echo "string";
}

// read password from config
$config = json_decode(file_get_contents("config.json"), true);

if(isset($_POST['submit'])) {
  $valid = $_POST['password'] == $config['password'];
  if(!$valid) $errorMsg = 'Invalid password.';
  else $_SESSION['login'] = true;
}
if($valid) {
   header('Location: form.php'); die();
}
require_once('header_alpaca.php');

// form with alpaca
?>
<div class='container'>

  <!-- sceleton for the form -->
  <form name='input' action='login.php' method='post'>
      <div class='container'>
          <div id='form'></div> <!-- alpaca will fill in the form in this div -->
          <div class='error'><?= $errorMsg ?></div>
          <a href='javascript:history.back()'>Cancel</a>
          <input type='submit' value='Save' name='submit'>
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
  require_once("footer.php");
?>
