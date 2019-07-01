@extends('datatables.eloquent.master')

@section('content')
<h3 class="text-center">GERENCIAMENTO DE EQUIPAMENTO DO LABORATÓRIO METALOGRÁFICO</h3>
<hr>
<div class="container-fluid">
    <a href="http://localhost:8000/equipamento/create" class="btn btn-primary" >Adiciona Equipamento</a>
    <br>
    <br>
    <!-- Trigger the modal with a button -->
<!-- Button trigger modal -->

    <table class="display" id="example">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Ação</th>

                
            </tr>
        </thead>
    </table>
</div>

<script id="details-template" type="text/x-handlebars-template">
       <div class="label label-info">Movimentacoes da Peça @{{ name }}'</div> -->
         <table class="table details-table" id="posts-@{{id}}">
            <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Data Retirada</th>
                <th>Data Devolucao</th>
                <th>Quantidade de Amostras</th>
                <th>Observação</th>


            </tr>
            </thead>
        </table>
</script>
    
@stop

@push('scripts')

<script>
/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.descricao+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.descricao+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}

$(document).ready(function() {
    var template = Handlebars.compile($("#details-template").html());

    var table = $('#example').DataTable( {
  
        "ajax": "{!! route('equipamento.dadosmestre') !!}",

  

        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
       
            { data: 'id', name: 'id' },
            { data: 'nome', name: 'nome' },
            { data: 'descricao', name: 'descricao' }, 
            { data: 'acao2', name: 'acao2' }    
         ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    
    // Add event listener for opening and closing details
    /*
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
        var tableId = row.data().id;

 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
         //  row.child( format(row.data()) ).show();
            row.child( initTable(row.data()) ).show();
            tr.addClass('shown');
        }
    } );  */
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var tableId = 'posts-' + row.data().id;

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            //row.child( format(row.data()) ).show();
            row.child(template(row.data())).show();
            initTable(tableId, row.data());
            tr.addClass('shown');
            tr.next().find('td').addClass('no-padding bg-gray');
        }
    }); 


    function initTable(tableId, data) {
        $('#' + tableId).DataTable({
            processing: true,
            serverSide: false,
            paging: false,
            ajax: data.details_url,
            columns: [
                { data: 'id', name: 'id' },
                { data: 'usuario', name: 'usuario'},
                { data: 'data_inicio', name: 'data_inicio' },
                { data: 'data_fim', name: 'data_fim' },
                { data: 'quantidade_de_amostras', name: 'quantidade_de_amostras' },
                { data: 'observacao', name: 'observacao' }

            ]
        })
}
    
} );

</script>

 
@endpush