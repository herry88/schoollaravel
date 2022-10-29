@extends('master')

@section('title')
    <title>Halaman Dosen</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Data Dosen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Data Dosen</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Halaman Data Dosen</h2>
            <div class="row">
                {{-- pesan jika berhasil --}}
                @if (session('status'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-warning">
                                <b>Pesan</b> : {{ session('status') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>nidn</th>
                                            <th>Nama Dosen</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dosen as $ds)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ds->nidn }}</td>
                                                <td>{{ $ds->nama }}</td>
                                                <td>{{ $ds->nohp }}</td>
                                                <td>{{ $ds->email }}</td>
                                                <td>
                                                    <a href="{{ route('dosen.edit', $ds->nidn) }}" title="Edit"
                                                        class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('dosen.destroy', $ds->nidn) }}"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
