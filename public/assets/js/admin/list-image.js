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
//Delete image
function deleteImage(basename) {
    var name = basename.replace('_', '.');
    bootbox.dialog({
        message: "Do you want to delete this image ?",
        title: "Warning",
        buttons: {
            success: {
                label: "Ok",
                className: "btn-success",
                callback: function() {
                    $.ajax({
                        url : SITE_ROOT + '/admin/deleteImage',
                        type : 'POST',
                        data : {
                            'name' : name
                        },
                        success : function() {
                            window.location.href = SITE_ROOT + "/admin/image";
                        }
                    });
                }
            },
            danger: {
                label: "Cancel",
                className: "btn-danger",
                callback: function() {
                }
            }
        }
    });
}