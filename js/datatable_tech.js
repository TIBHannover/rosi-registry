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
         { data: 'interface' },
         { data: 'interface_type' },
         { data: 'documentation' },
         { data: 'data_format' },
         { data: 'licence' }
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
        },
        {
            targets: 4, // display link as a link
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
