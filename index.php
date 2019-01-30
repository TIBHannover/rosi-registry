<!DOCTYPE html>
<!--
Display overview of all existing entries

uses datatables
-->
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
      <link rel="stylesheet" type="text/css" href="style.css">

      <!-- jquery 3.3.1 -->
      <script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>

      <!-- bootstrap v4.2.1 -->
      <link type="text/css" rel="stylesheet" href="lib/bootstrap-4.2.1.min.css" />
      <script type="text/javascript" src="lib/bootstrap-4.2.1.min.js"></script>

      <!-- datatables -->
      <script type="text/javascript" src="lib/datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="lib/datatables.min.css"/>
  </head>

  <body>
    <!-- header -->
    <header>
        <div class="header">
          <a href="index.php">
            <h1>Registry of Open Scientometric Data Sources</h1>
          </a>
        </div>
        <a href="https://tib.eu/rosi-project"><img id="rosi-logo" src="rosi-logo.png" width="100px"></a>
        <a href="https://tib.eu"><img id="tib-logo" src="tib-logo.png" width="100px"></a>
    </header>

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
            </tr>
        </thead>
        <tbody></tbody>
      </table>

      <script type="text/javascript">
          var ajax = new XMLHttpRequest(); //New request object
          ajax.open("get", "get-data.php", true);
          ajax.send();
          ajax.onload = function() {
              $('#table_id').DataTable({
                data : JSON.parse(this.responseText),
                columns: [
                 { data: 'id' },
                 { data: 'name' },
                 { data: 'link' },
                 { data: 'description' }
               ],
               columnDefs: [
                 {
                     targets: 0, // display id as a link to the display page
                     render: function ( data, type, row, meta ) {
                         if(type === 'display'){
                             data = '<a href="display.php?sourceId=' + data + '">' + data + '</a>';
                         }

                         return data;
                     }
                 },
                 {
                     targets: 1, // display name as a link to the display page
                     render: function ( data, type, row, meta ) {
                         if(type === 'display'){
                             data = '<a href="display.php?sourceId=' + row.id + '">' + data + '</a>';
                         }

                         return data;
                     }
                 },
                {
                    targets: 2, // display link as a link
                    render: function ( data, type, row, meta ) {
                        if(type === 'display'){
                            data = '<a href="' + data + '">' + data + '</a>';
                        }

                        return data;
                    }
                }
          ]
             });
          };
      </script>
    </div>
  </body>
</html>
