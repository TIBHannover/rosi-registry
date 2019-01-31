<!--
index.php
Display overview of all existing entries

uses datatables https://www.datatables.net/
-->

<?php
  require_once("header_datatables.php");
?>

<div class="container">

  <div class="alert alert-warning">
    This site is under construction.
  </div>

  <p>
    <a href="form.php">Add new data source</a>
  </p>

  <table id="table_id" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Link</th>
            <th>Description</th>
            <th>Entity</th>
        </tr>
    </thead>
    <tbody></tbody>
  </table>

<script type="text/javascript" src="js/datatables.js"></script>

</div>
<?php
  require_once("footer.php");
?>
