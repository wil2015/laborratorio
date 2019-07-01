@extends('layouts.master')

@section('content')
    <table class="table table-bordered display" class="display" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descricao</th>
                <th>Data</th>
                <th></th>

               
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(document).ready(function() {
    var table = $('#users-table').DataTable( {
      //  "ajax": "{!! route('datatables.data') !!}",
        "ajax": "{!! route('datatables.dadosmestre') !!}",

        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { data: 'id', name: 'id' },
            { data: 'descricao', name: 'descricao' },
            { data: 'data_cricao', name: 'data_cricao' }
          
        ],
        "order": [[1, 'asc']]
    } );
      // Add event listener for opening and closing details
      $('#users-table tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );

</script>
@endpush