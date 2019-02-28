<?php
/**
* @file index.php
* Display overview of all existing entries
*
* uses datatables https://www.datatables.net/
*/
  require_once("header_datatables.php");
?>

<div class="container">

  <div class="alert alert-warning">
    This site is under construction.
  </div>
  <p>
    The diversity of scientometric data sources is large – and new ones are constantly being published, existing ones are changing, and others are being switched off. It is almost impossible to maintain a complete overview. In this Registry of Open Scientometric Data Sources we collect and describe several data sources for open, i.e. freely licensed scientometric information.
  <a href="about.php">Read more</a>
  </p>
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

<script type="text/javascript" src="js/datatable.js"></script>

</div>
<?php
  require_once("footer.php");
?>
