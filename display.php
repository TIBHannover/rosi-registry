<?php
/**
* @file display.php
* Display existing entry
* uses alpaca http://alpacajs.org
*/
  require_once("includes/header_alpaca.php");
?>

<div class="container">

  <div id="img"></div>

  <!-- alpaca will fill in the form in this div -->
  <div id="form"></div>
  <a href="index.php">back to overview</a>

  <?php
    echo '<a href="form.php?sourceId='.$_GET['sourceId'].'">edit</a>';
  ?>

</div>

<script type="text/javascript" src="js/display.js"></script>

<?php
  require_once("includes/footer.php");
?>
