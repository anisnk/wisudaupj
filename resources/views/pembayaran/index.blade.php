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
                    <h3>Pembayaran</h3>
                </div>
                <div class="card-body">
                    @if ($user->wisudawan == NULL)
                        <p>Harap Isi Data Diri Terlebih Dahulu</p>
                    @else
                        @if ($pembayaran == NULL)
                        <a href="{{ route('pembayaran.create') }}">
                            <button type="button" class="btn btn-primary">Upload Bukti Pembayaran</button>
                        </a>

                        @else
                            @if ($pembayaran->verifikasi == NULL)
                            <p>Sedang Menunggu Untuk Di Verifikasi </p>
                            @else
                            <p>Sudah Di Verifikasi</p>

                            @endif

                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
