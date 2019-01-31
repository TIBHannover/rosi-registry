<!--
display.php
Display existing entry
uses alpaca http://alpacajs.org
-->

<?php
  require_once("header_alpaca.php");
?>

<div class="container">

  <div id="img"></div>

  <!-- alpace will fill in the form in this div -->
  <div id="form"></div>
  <a href="index.php">back to overview</a>

  <?php
    echo '<a href="form.php?sourceId='.$_GET['sourceId'].'">edit</a>';
  ?>

</div>

<script type="text/javascript" src="js/display.js"></script>

<?php
  require_once("footer.php");
?>
