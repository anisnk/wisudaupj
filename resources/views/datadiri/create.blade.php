@extends('layouts.userapp')

@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div style="font-size: 28px">Isi Data Diri</div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('datadiri.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label">Nama</label>

                            <input id="nama" type="text"
                                class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}"
                                name="nama" autocomplete="nama" autofocus>

                            @if ($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label">NIM</label>

                            <input id="nim" type="text"
                                class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" name="nim"
                                autocomplete="nim" autofocus>

                            @if ($errors->has('nim'))
                            <span class="invalid-feedback" role="alert">
                                <strong>NIM Salah / Sudah Pernah Digunakan</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="prodi" class="col-md-4 col-form-label">Program Studi</label>

                              <select class="form-control" name="prodi_id">
                                  @foreach ($prodi as $prodi)
                                  <option value="{{ $prodi->id }}"> {{ $prodi->nama_prodi }}</option>
                                  @endforeach
                              </select>

                            @if ($errors->has('nama_depan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-md-4 col-form-label">Tempat Lahir</label>

                            <input id="tempat_lahir" type="text"
                                class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}"
                                name="tempat_lahir" autocomplete="tempat_lahir" autofocus>

                            @if ($errors->has('tempat_lahir'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-md-4 col-form-label">Tanggal Lahir (YYYY-MM-DD)</label>

                            <input id="tgl_lahir" type="text"
                                class="form-control{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}"
                                name="tgl_lahir" autocomplete="tgl_lahir" autofocus>

                            @if ($errors->has('tgl_lahir'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label">Alamat</label>

                            <input id="alamat" type="text"
                                class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat"
                                autocomplete="alamat" autofocus>

                            @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="agama" class="col-md-4 col-form-label">Agama</label>

                            <input id="agama" type="text"
                                class="form-control{{ $errors->has('agama') ? ' is-invalid' : '' }}" name="agama"
                                autocomplete="agama" autofocus>

                            @if ($errors->has('agama'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="no_telp" class="col-md-4 col-form-label">Nomor Handphone</label>

                            <input id="no_telp" type="text"
                                class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp"
                                autocomplete="no_telp" autofocus>

                            @if ($errors->has('no_telp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="ipk" class="col-md-4 col-form-label">IPK</label>

                            <input id="ipk" type="text"
                                class="form-control{{ $errors->has('ipk') ? ' is-invalid' : '' }}" name="ipk"
                                autocomplete="ipk" autofocus>

                            @if ($errors->has('ipk'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="judul_ta" class="col-md-4 col-form-label">Judul Tugas Akhir</label>

                            <input id="judul_ta" type="text"
                                class="form-control{{ $errors->has('judul_ta') ? ' is-invalid' : '' }}" name="judul_ta"
                                autocomplete="judul_ta" autofocus>

                            @if ($errors->has('judul_ta'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="th_masuk" class="col-md-4 col-form-label">Tahun Masuk</label>

                            <input id="th_masuk" type="text"
                                class="form-control{{ $errors->has('th_masuk') ? ' is-invalid' : '' }}" name="th_masuk"
                                autocomplete="th_masuk" autofocus>

                            @if ($errors->has('th_masuk'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="th_keluar" class="col-md-4 col-form-label">Tahun Lulus</label>

                            <input id="th_keluar" type="text"
                                class="form-control{{ $errors->has('th_keluar') ? ' is-invalid' : '' }}"
                                name="th_keluar" autocomplete="th_keluar" autofocus>

                            @if ($errors->has('th_keluar'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="nama_ayah" class="col-md-4 col-form-label">Nama Ayah</label>

                            <input id="nama_ayah" type="text"
                                class="form-control{{ $errors->has('nama_ayah') ? ' is-invalid' : '' }}"
                                name="nama_ayah" autocomplete="nama_ayah" autofocus>

                            @if ($errors->has('nama_ayah'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="nama_ibu" class="col-md-4 col-form-label">Nama Ibu</label>

                            <input id="nama_ibu" type="text"
                                class="form-control{{ $errors->has('nama_ibu') ? ' is-invalid' : '' }}" name="nama_ibu"
                                autocomplete="nama_ibu" autofocus>

                            @if ($errors->has('nama_ibu'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="no_telp_ortu" class="col-md-4 col-form-label">Nomor Telepon Orang Tua</label>

                            <input id="no_telp_ortu" type="text"
                                class="form-control{{ $errors->has('no_telp_ortu') ? ' is-invalid' : '' }}"
                                name="no_telp_ortu" autocomplete="no_telp_ortu" autofocus>

                            @if ($errors->has('no_telp_ortu'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="alamat_ortu" class="col-md-4 col-form-label">Alamat Orang Tua</label>

                            <input id="alamat_ortu" type="text"
                                class="form-control{{ $errors->has('alamat_ortu') ? ' is-invalid' : '' }}"
                                name="alamat_ortu" autocomplete="alamat_ortu" autofocus>

                            @if ($errors->has('alamat_ortu'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Kolom Harus Diisi</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary">
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
