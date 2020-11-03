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
                @if ($wisudawan->user->pembayaran->verifikasi == NULL)
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4>Data Pembayaran</h4>
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
                                        <th class="col-4">Nama Bank</th>
                                        <td class="col-8">: {{ $wisudawan->user->pembayaran->nama_bank }}</td>
                                    </tr>
                                    <tr class="d-flex">
                                        <th class="col-4">Nomor Rekening</th>
                                        <td class="col-8">: {{ $wisudawan->user->pembayaran->no_rek }}</td>
                                    </tr>
                                    <tr class="d-flex">
                                        <th class="col-4">Rekening Atas Nama</th>
                                        <td class="col-8">: {{ $wisudawan->user->pembayaran->atas_nama }}</td>
                                    </tr>
                                    <tr class="d-flex">
                                        <th class="col-4">Status Pembayaran</th>
                                        <td class="col-8">: @if ($wisudawan->user->pembayaran == NULL)
                                            Belum Melakukan Pembayaran
                                        @else
                                            @if ($wisudawan->user->pembayaran->verifikasi == NULL)
                                                Pembayaran belum di verifikasi
                                            @else
                                                Pembayaran Sudah Di Verifikasi
                                            @endif
                                        @endif
                                        </td>
                                    </tr>
                                    <tr class="d-flex">
                                        <th class="col-4">Bukti Pembayaran</th>
                                        <td class="col-8">: <img src="/storage/{{ $wisudawan->user->pembayaran->image }}" style="max-width: 600px"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <form method="POST" action="{{ route('wisudawan.update', $wisudawan->user_id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-check mb-5">
                                <input type="checkbox" class="form-check-input" id="verifikasi" name="verifikasi" value="Y">
                                <label class="form-check-label" for="verifikasi">Verifikasi</label>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-info">
                                    Simpan
                                </button>
                            </div>

                        </form>
                    </div>
                @else
                    <div class="card-body">
                        <div class="table-responsive">
                            <h4>Konfirmasi Kehadiran</h4>
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
                                </tbody>
                            </table>
                        </div>

                        @if ($wisudawan->kehadiran == NULL)
                            <form method="POST" action="{{ route('wisudawan.update', $wisudawan->user_id) }}">
                                @csrf
                                @method('PATCH')

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="kehadiran" name="kehadiran" value="Y">
                                    <label class="form-check-label" for="kehadiran">Hadir</label>
                                </div>

                                <div class="form-group row mb-0">
                                    <button type="submit" class="btn btn-info">
                                        Simpan
                                    </button>
                                </div>

                            </form>
                        @else
                            <a class="btn btn-info btn-sm" href="{{ route('wisudawan.index') }}">
                                Return
                            </a>
                        @endif

                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
