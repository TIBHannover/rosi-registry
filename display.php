<?php
/**
* @file display.php
* Display existing entry
* uses alpaca http://alpacajs.org
*/
  require_once("includes/header_alpaca.php");
?>
<div class="container">

  <div id="img"></div>   <!-- the logo will be added via js -->

  <div id="form"></div>   <!-- alpaca will fill in the form in this div -->

  <div class="section">
    <div id="read_more"></div>   <!-- read more (links to CORE and BASE are added via js)-->
  </div>

  <a href="index.php">back to overview</a>

  <?php
    echo '<a href="form.php?sourceId='.$_GET['sourceId'].'">edit</a>';
  ?>

</div>

<script type="text/javascript" src="js/display.js"></script>

<?php
  require_once("includes/footer.php");
?>
