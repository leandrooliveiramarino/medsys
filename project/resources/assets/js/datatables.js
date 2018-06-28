require("datatables.net-dt");

$(document).ready(function() {
    $('.datatables').DataTable({
        "columnDefs": [
            { "orderable": false, "targets": 'dt-no-sort', 'data': 'no-sort' },
            { "width": "10%", "targets": 'dt-sm' },
        ],
        "lengthChange": false,
        "language": {
            "decimal":        "",
            "emptyTable":     "Sem dados disponíveis na tabela",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros disponíveis",
            "infoFiltered":   "(filtrados de _MAX_ total de registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "loadingRecords": "Carregando...",
            "processing":     "Processando...",
            "search":         "Buscar:",
            "zeroRecords": "Nada encontrado",
            "paginate": {
                    "first":      "Primeira",
                    "last":       "Última",
                    "next":       "Próxima",
                    "previous":   "Anterior"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        },
        "pagingType": "full_numbers"
    });
} );