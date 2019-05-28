@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   
                    <table id="example" class="table table-striped">
                        <thead>
                                <th>id</th>
                                <th>transtime</th>
                                <th>tdc</th>
                                <th>nama user</th>
                                <th>Prod desk</th>
                                <th>debet</th>
                                <th>credit</th>
                                <th>balance</th>

                                
                        </thead>
                        <tfoot>
                            <th>id</th>
                            <th>transtime</th>
                            <th>tdc</th>
                            <th>nama user</th>
                            <th>Prod desk</th>
                            <th>debet</th>
                            <th>credit</th>
                            <th>balance</th>
                        </tfoot>
                        <tbody>
                        <tr>
                            @foreach ($transaksi as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->transtime}}</td>
                                <td>{{$item->tdc}}</td>
                                <td>{{$item->nama_user}}</td>
                                <td>{{$item->prod_desk}}</td>
                                <td>{{$item->debet}}</td>
                                <td>{{$item->credit}}</td>
                                <td>{{$item->balance}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script  type="text/javascript">
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        } );
     
        // DataTable
        var table = $('#example').DataTable();
     
        // Apply the search
        table.columns().every( function () {
            var that = this;
     
            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
    </script>


@endsection
