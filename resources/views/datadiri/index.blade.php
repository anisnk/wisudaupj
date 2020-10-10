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
                <div class="card-body">

                    @if ($wisudawan == NULL)
                    <p>Data belum terisi</p>
                    <a href="{{ route('datadiri.create') }}">
                        <button type="button" class="btn btn-primary">Input Data</button>
                    </a>
                    @else
                    <div class="table-responsive">
                        <h4>Data Wisudawan</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">NIM</th>
                                    <td class="col-8">: {{ $wisudawan->nim }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Nama</th>
                                    <td class="col-8">: {{ $wisudawan->nama }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Program Studi</th>
                                    <td class="col-8">: {{ $wisudawan->prodi->nama_prodi}}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Fakultas</th>
                                    <td class="col-8">: {{ $wisudawan->prodi->fakultas->nama_fakultas}}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Tempat Lahir</th>
                                    <td class="col-8">: {{ $wisudawan->tempat_lahir }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Tanggal Lahir</th>
                                    <td class="col-8">: {{ $wisudawan->tgl_lahir }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Agama</th>
                                    <td class="col-8">: {{ $wisudawan->agama }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Alamat</th>
                                    <td class="col-8">: {{ $wisudawan->alamat }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">No Handphone</th>
                                    <td class="col-8">: {{ $wisudawan->no_telp }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">e-mail</th>
                                    <td class="col-8">: {{ $wisudawan->user->email }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="table-responsive">
                        <h4>Data Orangtua</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">Nama Ayah</th>
                                    <td class="col-8">: {{ $wisudawan->nama_ayah }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Nama Ibu</th>
                                    <td class="col-8">: {{ $wisudawan->nama_ibu }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">No Handphone Orang Tua</th>
                                    <td class="col-8">: {{ $wisudawan->no_telp_ortu }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Alamat Orang Tua</th>
                                    <td class="col-8">: {{ $wisudawan->alamat_ortu }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <h4>Informasi Skripsi</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">Judul TA</th>
                                    <td class="col-8">: {{ $wisudawan->judul_ta }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <h4>Data Prestasi Akademik</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">IPK</th>
                                    <td class="col-8">: {{ $wisudawan->ipk }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <h4>Data Kelulusan</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">Tahun Masuk</th>
                                    <td class="col-8">: {{ $wisudawan->th_masuk }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Tahun Keluar</th>
                                    <td class="col-8">: {{ $wisudawan->th_keluar }}</td>
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
