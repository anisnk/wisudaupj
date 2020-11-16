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
                    <table id="example1" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Program Studi</th>
                                <th>Status Pembayaran</th>
                                <th>Kehadiran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_wisudawan as $index => $wisudawan)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$wisudawan->nama}}</td>
                                <td>{{$wisudawan->nim}}</td>
                                <td>{{$wisudawan->prodi->nama_prodi}}</td>
                                <td>@if ($wisudawan->user->pembayaran == NULL)
                                    <a class="btn btn-secondary btn-sm" href="#" disabled>
                                        Belum Membayar
                                    </a>
                                    @else
                                        @if ($wisudawan->user->pembayaran->verifikasi == NULL)
                                            <a class="btn btn-info btn-sm" href="{{ route('wisudawan.edit', $wisudawan->id) }}">
                                                Verifikasi
                                            </a>
                                        @else
                                            <a class="btn btn-success btn-sm" href="#">
                                                Sudah Verifikasi
                                            </a>
                                        @endif
                                    @endif
                                </td>
                                <td>@if ($wisudawan->user->pembayaran == NULL)
                                        <a class="btn btn-danger btn-sm" href="#">
                                            Konfirmasi
                                        </a>
                                    @else
                                        @if ($wisudawan->user->pembayaran->verifikasi == NULL)
                                            <a class="btn btn-danger btn-sm" href="{{ route('wisudawan.edit', $wisudawan->id) }}">
                                                Konfirmasi
                                            </a>
                                        @else
                                            @if ($wisudawan->kehadiran == NULL)
                                                <a class="btn btn-info btn-sm" href="{{ route('wisudawan.edit', $wisudawan->id) }}">
                                                    Konfirmasi
                                                </a>
                                            @else
                                                <a class="btn btn-success btn-sm" href="#">
                                                    Hadir
                                                </a>
                                            @endif
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('wisudawan.show', $wisudawan->id) }}">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <a href="{{ url('wisudawan/export-excel') }}" class="btn btn-sm btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div>

    @endsection
