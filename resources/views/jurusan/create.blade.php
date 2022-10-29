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
                @if ($errors->any())
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('jurusan.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Kode Jurusan</label>
                                    <input type="text" name="kode_jurusan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <input type="text" name="nama_jurusan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kode fakultas</label>
                                    <select name="kode_fakultas" class="form-control">
                                        <option value="0">-Pilih Data-</option>
                                        @foreach ($fakultas as $fk)
                                            <option value="{{ $fk->kode_fakultas }}">{{ $fk->nama_fakultas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenjang</label>
                                    <select name="jenjang" class="form-control">
                                        <option value="0">-Pilih Data-</option>
                                        <option value="d3">D3</option>
                                        <option value="s1">S1</option>
                                        <option value="s2">S2</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
