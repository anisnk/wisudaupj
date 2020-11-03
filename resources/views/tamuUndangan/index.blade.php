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
                    <h3>Data Tamu</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Jabatan</th>
                                <th>email</th>
                                <th>Nomor Handphone</th>
                                <th>Kehadiran</th>
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
                                <td> @if ($tamu->kehadiran == NULL)
                                        <a class="btn btn-info btn-sm" href="{{ route('tamuUndangan.edit', $tamu->id) }}">
                                            Konfirmasi
                                        </a>
                                    @else
                                        <a class="btn btn-success btn-sm" href="#">
                                            Hadir
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
