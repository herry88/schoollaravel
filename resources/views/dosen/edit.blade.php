@extends('master')

@section('title')
    <title>Edit Dosen</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Dosen</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Edit Dosen</h2>
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
                            <form action="{{ route('dosen.update', $dosen->nidn) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>NIDN</label>
                                    <input type="text" value="{{ $dosen->nidn }}" name="nidn" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama Dosen</label>
                                    <input type="text" name="nama" value="{{ $dosen->nama }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="number" value="{{ $dosen->nohp }}" name="nohp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $dosen->email }}" class="form-control">
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
