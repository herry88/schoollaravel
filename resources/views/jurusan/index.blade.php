@extends('master')

@section('title')
    <title>Data Jurusan</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Data Jurusan</h1>
        </div>
        <h2 class="section-title">Data Jurusan</h2>
        <div class="section-body">
            @if (session('status'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            <b>Pesan</b> : {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th>Nama Fakultas</th>
                                    <th>Jenjang</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jurusan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_jurusan }}</td>
                                        <td>{{ $item->nama_jurusan }}</td>
                                        <td>{{ $item->fakultas->nama_fakultas }}</td>
                                        <td>{{ $item->jenjang }}</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Belum Ada</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
