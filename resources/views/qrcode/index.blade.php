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
                    <h3>Qr Code</h3>
                </div>
                <div class="card-body">
                    @if ($user->pembayaran == NULL)
                        <p>Belum Melakukan Pembayaran</p>
                    @else
                        @if ($user->pembayaran->verifikasi == NULL)
                            <p>Pembayaran Anda Belum Di Verifikasi</p>
                        @else
                            {!! QrCode::size(100)->generate('Cek 1 2 3'); !!}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
