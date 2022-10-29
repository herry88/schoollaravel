@extends('master')

@section('title')
    <title>Data Fakultas</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Fakultas</h1>
        </div>
        <h2 class="section-title">Tambah Fakultas</h2>
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
                            <form action="{{ route('fakultas.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label>Kode fakultas</label>
                                    <input type="text" name="kode_fakultas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama fakultas</label>
                                    <input type="text" name="nama_fakultas" class="form-control">
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
