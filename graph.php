<!--
graph.php
Display Dataflow Image made with draw.io

uses markdown to display text https://github.com/evilstreak/markdown-js
-->
<?php require_once("includes/header.php");?>
<div class="container">
  <!-- include text from md -->
  <div id="preview"></div>

  <!-- include image of dataflow -->
  <img src="includes/dataflow.png" alt="Dataflow" max-width="250px">

</div> <!-- container -->

<script>
 $.get("pages/graph.md", function(data){
   preview.innerHTML = markdown.toHTML(data);
 });
</script>

<!-- footer -->
<?php require_once("includes/footer.php");?>
