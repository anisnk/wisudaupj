@extends('layouts.adminapp')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data Tamu Undangan</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Jabatan</th>
                                <th>email</th>
                                <th>Nomor Handphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_tamu as $index => $tamu)
                            <tr>
                                <td>{{ $index +1 }}</td>
                                <td>{{$tamu->nama}}</td>
                                <td>{{$tamu->instansi}}</td>
                                <td>{{$tamu->jabatan}}</td>
                                <td>{{$tamu->email}}</td>
                                <td>{{$tamu->no_telp}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
