@extends('layouts.userapp')

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
                    <h3>Data Diri Wisudawan</h3>
                </div>
                <div class="card-body">

                    @if ($wisudawan == NULL)
                    <p>Data belum terisi</p>
                    <a href="{{ route('datadiri.create') }}">
                        <button type="button" class="btn btn-primary">Input Data</button>
                    </a>
                    @else
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td>: {{ $wisudawan->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">NIM</th>
                                    <td>: {{ $wisudawan->nim }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fakultas</th>
                                    <td>: {{ $wisudawan->prodi->fakultas->nama_fakultas}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Prodi</th>
                                    <td>: {{ $wisudawan->prodi->nama_prodi}}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Email</th>
                                    <td>: {{ $wisudawan->user->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td>: {{ $wisudawan->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td>: {{ $wisudawan->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>: {{ $wisudawan->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Agama</th>
                                    <td>: {{ $wisudawan->agama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Handphone</th>
                                    <td>: {{ $wisudawan->no_telp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">IPK</th>
                                    <td>: {{ $wisudawan->ipk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Judul TA</th>
                                    <td>: {{ $wisudawan->judul_ta }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahun Masuk</th>
                                    <td>: {{ $wisudawan->th_masuk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahun Keluar</th>
                                    <td>: {{ $wisudawan->th_keluar }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Ayah</th>
                                    <td>: {{ $wisudawan->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Ibu</th>
                                    <td>: {{ $wisudawan->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Handphone Orang Tua</th>
                                    <td>: {{ $wisudawan->no_telp_ortu }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Orang Tua</th>
                                    <td>: {{ $wisudawan->alamat_ortu }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('datadiri.edit', $wisudawan->id) }}">
                            <button type="button" class="btn btn-primary">Edit Data</button>
                        </a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
