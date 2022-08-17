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
                {data: 'interface'},
                {data: 'interface_type'},
                {data: 'documentation'},
                {data: 'data_format'}
            ],
            order: [[1, 'asc']],
            columnDefs: [
                {
                    targets: 1, // display name as a link to the display page
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            data = '<a href="display.php?sourceId=' + row.id + '">' + data + '</a>';
                        }
                        return data;
                    }
                },
                {
                    targets: 2, // display link as a link
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            data = '<a href="' + data + '">' + data + '</a>';
                        }
                        return data;
                    }
                },
                {
                    targets: 4, // display link as a link
                    render: function (data, type, row, meta) {
                        if (type === 'display') {
                            data = '<a href="' + data + '">' + data + '</a>';
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
                row.child('<strong>License</strong>' + ' &nbsp;&nbsp;&nbsp; ' + row.data().licence).show();
                tr.addClass('shown');
            }
        });

    });

});
