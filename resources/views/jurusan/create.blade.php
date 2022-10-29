@extends('master')

@section('title')
    <title>Tambah Data Jurusan</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Jurusan</h1>
        </div>
        <h2 class="section-title">Tambah Data Jurusan</h2>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Kode Jurusan</label>
                                <input type="text" name="kode_jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input type="text" name="nama_jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Jurusan</label>
                                <select name="kode_fakultas" class="form-control">
                                    <option value="0">-Pilih Data-</option>
                                    @foreach ($fakultas as $fk)
                                        <option value="{{ $fk->kode_fakultas }}">{{ $fk->nama_fakultas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
