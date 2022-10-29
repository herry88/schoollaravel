@extends('master')

@section('title')
    <title>Halaman Tambah Dosen</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Dosen</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Dosen</h2>
            <div class="row">
                {{-- pesan error --}}
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
                            <form action="{{ route('dosen.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <input type="text" name="nidn" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="number" name="nohp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <button class="btn btn-primary">Simpan Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
