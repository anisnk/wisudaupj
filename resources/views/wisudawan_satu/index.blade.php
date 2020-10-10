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
                    <h3>Data Wisudawan</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Program Studi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_wisudawan as $index => $wisudawan)
                            <tr>
                                <td>{{ $index +1 }}</td>
                                <td>{{$wisudawan->nama}}</td>
                                <td>{{$wisudawan->nim}}</td>
                                <td>{{$wisudawan->tempat_lahir}}</td>
                                <td>{{$wisudawan->tgl_lahir}}</td>
                                <td>{{ $wisudawan->prodi->nama_prodi}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
