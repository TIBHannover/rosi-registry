<!--
about.php

uses markdown to display text https://github.com/evilstreak/markdown-js
-->
<?php
  require_once("includes/header.php");
?>

<div class="container">
   <div id="preview"></div>
</div>

<script>
 $.get("pages/about.md", function(data){
   preview.innerHTML = markdown.toHTML(data);
 });
</script>

<?php
  require_once("includes/footer.php");
?>
