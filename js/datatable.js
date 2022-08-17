/**
* @file js/datatable.js
* uses datatables https://www.datatables.net/
*/

// read remote url from config
$.getJSON('./config.json', function(config) {

    // get data from remote
    $.getJSON(config['remote'], function (data) {

        // create data table
        var table = $('#table_id').DataTable({
            responsive: true,
            fixedHeader: true,
            data: data,
            columns: [
                {
                    className: 'dt-control',
                    orderable: false,
                    data: null,
                    defaultContent: '',
                },
                {data: 'name'},
                {data: 'description'},
                {data: 'image_url'}
            ],
            order: [[1, 'asc']],
            columnDefs: [
                {
                    targets: 1, // display name as a link to the detail page
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            data = '<a href="display.php?sourceId=' + row.id + '">' + data + '</a>';
                        }
                        return data;
                    }
                },
                {
                    targets: 3, // display logo of the data source
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            data = '<img class="source-logo" src="' + data + '" alt=""/>';
                        }
                        return data;
                    }
                }
            ]
        });

        // Add event listener for opening and closing details
        $('#table_id tbody').on('click', 'td.dt-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child('<strong>Link</strong>' + ' &nbsp;&nbsp;&nbsp; ' + '<a href="' + row.data().link + '" target="_blank">' + row.data().link + '</a>').show();
                tr.addClass('shown');
            }
        });

    });

});
