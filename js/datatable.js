/**
* @file js/datatable.js
* uses datatables https://www.datatables.net/
*/

var ajax = new XMLHttpRequest(); //New request object
ajax.open("get", "db/get-data.php", true);
ajax.send();
ajax.onload = function() {
    $('#table_id').DataTable({
      responsive: true,
      fixedHeader: true,
      data : JSON.parse(this.responseText),
      columns: [
       { data: 'id' },
       { data: 'name' },
       { data: 'link' },
       { data: 'description' },
       { data: 'entity' }
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
