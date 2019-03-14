/**
* @file js/datatable.js
* uses datatables https://www.datatables.net/
*/

// read remote url from config
$.getJSON('./config.json', function(config){

  // get data from remote
  $.getJSON(config['remote'], function(data){

      // create data table
      $('#table_id').DataTable({
        responsive: true,
        fixedHeader: true,
        data : data,
        columns: [
         { data: 'id' },
         { data: 'name' },
         { data: 'description' },
         { data: 'link' }
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
            targets: 3, // display link as a link
            render: function ( data, type, row, meta ) {
                if(type === 'display'){
                    data = '<a href="' + data + '">' + data + '</a>';
                }

                return data;
            }
        }
      ]
     });
   });
 });
