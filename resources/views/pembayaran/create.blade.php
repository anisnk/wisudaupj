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
                    <h3>Bukti Pembayaran</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pembayaran.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_bank" class="col-md-4 col-form-label">Nama Bank</label>

                            <input id="nama_bank" type="text"
                                class="form-control{{ $errors->has('nama_bank') ? ' is-invalid' : '' }}"
                                name="nama_bank" autocomplete="nama_bank" autofocus>

                            @if ($errors->has('nama_bank'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="no_rek" class="col-md-4 col-form-label">Nomor Rekening</label>

                            <input id="no_rek" type="text"
                                class="form-control{{ $errors->has('no_rek') ? ' is-invalid' : '' }}" name="no_rek"
                                autocomplete="no_rek" autofocus>

                            @if ($errors->has('no_rek'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="atas_nama" class="col-md-4 col-form-label">Atas Nama</label>

                            <input id="atas_nama" type="text"
                                class="form-control{{ $errors->has('atas_nama') ? ' is-invalid' : '' }}"
                                name="atas_nama" autocomplete="atas_nama" autofocus>

                            @if ($errors->has('atas_nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label">Upload Bukti Pembayaran</label>

                            <input id="image" type="file" class="form-control-file" name="image" autocomplete="image"
                                autofocus>

                            @if ($errors->has('image'))
                                <strong>File Salah Atau Kosong</strong>
                            @endif
                        </div>

                        <input type="text" name="verifikasi" value="" hidden>

                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-info">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
