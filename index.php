<?php
/**
* @file index.php
* Display overview of all existing entries
*
* uses datatables https://www.datatables.net/
*/
  $lib = 'datatables';
  require_once("includes/header.php");
?>
<div class="container">
  <p>
    This registry describes data sources for scientometric information.
    It is maintained by the ROSI project. <a href="about.php">Read more</a>.
  </p>
  <div class="alert alert-warning">
    This is a work in progress. You are invited to help filling the registry!
    Contact us to get write access: rosi.project(at)tib.eu.
  </div>
  <p>
    <a href="form.php">Add new data source</a>
  </p>

  <table id="table_id" class="display">
    <thead>
        <tr>
			      <th>Name</th>
            <th>Description</th>
            <th></th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody></tbody>
  </table>

<script type="text/javascript" src="js/datatable.js"></script>

</div>
<?php
  require_once("includes/footer.php");
?>
