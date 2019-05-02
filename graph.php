<!--
graph.php
Display Dataflow Image made with draw.io
-->
<?php require_once("includes/header_datatables.php");?>
<div class="container">
  <div class="alert alert-warning">
    This site is under construction. You are invited to help filling the registry!
    Contact us to get write access: rosi.project(at)tib.eu.
  </div>
  <h3>Dataflow between scientometric data sources</h3>
  <div class="section">
    <p>
      Many data sources are including data from other sources.
      This graph displays connections between the data sources listed in this registry.
      Last update: 02.05.2019
    </p>
  </div> <!-- section -->
  <!-- include image of dataflow -->
  <?php require_once("includes/dataflow.html");?>
</div> <!-- container -->
<!-- footer -->
<?php require_once("includes/footer.php");?>
