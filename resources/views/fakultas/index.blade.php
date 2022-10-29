@extends('master')

@section('title')
    <title>Data Fakultas</title>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Data Fakultas</h1>
        </div>
        <h2 class="section-title">Data Fakultas</h2>
        <div class="row">
            {{-- pesan jika berhasil --}}
            @if (session('status'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">
                            <b>Pesan</b> : {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('fakultas.create') }}" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Fakultas</th>
                                    <th>Nama Fakultas</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($fakultas as $fk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $fk->kode_fakultas }}</td>
                                        <td>{{ $fk->nama_fakultas }}</td>
                                        <td>
                                            <a href="{{ route('fakultas.edit', $fk->kode_fakultas) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Data Belum Ditemukan</td>
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
