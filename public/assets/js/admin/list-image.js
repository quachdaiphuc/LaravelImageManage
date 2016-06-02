
var oTable;
$(document).ready(function () {
    oTable = $('#list-image').dataTable({
        "processing": true,
        "bLengthChange": false,

        language: {
            searchPlaceholder: "Image name ..."
        },
        "aoColumnDefs": [
            {
                'bSortable': false,
                'aTargets': [-1, 0]
            } //disables sorting for column one
        ],
        'iDisplayLength': 5,
        "sPaginationType": "full_numbers"
    });
});