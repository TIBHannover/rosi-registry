<!--
form.php
Display form to edit existing entry or add a new one
uses alpaca http://alpacajs.org
-->
<?php
  require_once("header_alpaca.php");
?>

<!-- sceleton for the form -->
<form action="set-data.php" method="post">
    <div class="container">
        <div id="form"></div> <!-- alpace will fill in the form in this div -->
        <a href="javascript:history.back()">Cancel</a>
        <input type="submit" value="Save">
    </div>
</form>

<script type="text/javascript" src="js/form.js"></script>

<?php
  require_once("footer.php");
?>
