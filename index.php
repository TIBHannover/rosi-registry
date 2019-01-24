<!DOCTYPE html>
<html>
  <head>
    <title>Registry of Open Scientometric Data Sources</title>
      <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="datatables.min.css"/>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <header>
        <div class="container">
          <h1>Registry of Open Scientometric Data Sources</h1>
        </div>
    </header>

    <div class="container">

      <div class="container">
        <a href="login.php">Add new data source</a>
      </div>

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
    <img class="img-responsive-md" src="rosi-logo.png" width="400px">
    <img class="img-responsive-md" src="https://www.tib.eu/typo3conf/ext/tib_tmpl_bootstrap/Resources/Public/images/TIB_Logo_en.png">
  </body>
</html>
