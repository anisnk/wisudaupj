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
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Konfirmasi Kehadiran</h4>
                        <table class="table table-sm">
                            <tbody>
                                <tr class="d-flex">
                                    <th class="col-4">Nama</th>
                                    <td class="col-8">: {{ $tamuUndangan->nama }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Instansi</th>
                                    <td class="col-8">: {{ $tamuUndangan->instansi }}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Jabatan</th>
                                    <td class="col-8">: {{ $tamuUndangan->jabatan}}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Nomor Telepon</th>
                                    <td class="col-8">: {{ $tamuUndangan->no_telp}}</td>
                                </tr>
                                <tr class="d-flex">
                                    <th class="col-4">Email</th>
                                    <td class="col-8">: {{ $tamuUndangan->email}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    @if ($tamuUndangan->kehadiran == NULL)
                        <form method="POST" action="{{ route('tamuUndangan.update', $tamuUndangan->id) }}">
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
                        <a class="btn btn-info btn-sm" href="{{ route('tamuUndangan.index') }}">
                            Return
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
