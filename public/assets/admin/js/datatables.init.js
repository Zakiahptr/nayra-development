
$(document).ready(function () {
  $('#datatable').DataTable({
    "language": {
        "sProcessing":   "Sedang memproses...",
        "sLengthMenu":   "Tampilkan _MENU_ data",
        "sZeroRecords":  "Belum ada data.",
        "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 data",
        "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
        "sInfoPostFix":  "",
        "sSearch":       "Cari:",
        "sUrl":          "",
        "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "<i class='fas fa-angle-left'></i>",
            "sNext":     "<i class='fas fa-angle-right'></i>",
            "sLast":     "Terakhir"
        }
    },
  }); //Buttons example

/******/ });
