$(document).ready(function(){
    $('#datatable2').dataTable({
        "aLengthMenu": [[5, 15, 50, -1], [5, 15, 50, "All"]],
            "iDisplayLength": 5
    });
    $('.select2').select2();

});