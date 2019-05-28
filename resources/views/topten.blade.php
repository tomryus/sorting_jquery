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
                                
                                <th>nama user</th>
                                <th>jumlah transaksi</th>
                                <th>Action</th>
                        </thead>
                       
                        <tbody>
                        <tr>
                            @foreach ($topten as $item)
                                <td>{{$item->nama_user}}</td>
                                <td>{{$item->jumlah_transaksi}}</td>
                                <td><a target="_blank" href="{{route('transaksi',$item->nama_user)}}" class="btn btn-info btn-sm"> lihat transaksi</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
