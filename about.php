<!--
about.php

uses markdown to display text https://github.com/evilstreak/markdown-js
-->
<?php
$lib = '';
require_once("includes/header.php");
?>

<div class="container">
   <div id="preview"></div>
</div>

<script>
    fetch('pages/about.md')
        .then(response => response.text())
        .then(data => {
            preview.innerHTML = markdown.toHTML(data);
        });
</script>

<?php
  require_once("includes/footer.php");
?>
