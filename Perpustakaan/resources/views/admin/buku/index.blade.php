@extends('admin/layouts/main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 733px;">
            <div class="card">
                <div class="card-header">
                    Data Buku
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="/admin/buku/create" class="btn btn-primary mb-2">Tambah Data</a>
                        </div>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>ISBN</th>
                                    <th>Judul Buku</th>
                                    <th>Tahun Terbit</th>
                                    <th>Penulis</th>
                                    <th>Kategori</th>
                                    <th>Sinopsis</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($bukus as $buku)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <th>{{ $buku->isbn }}</th>
                                        <th>{{ $buku->judul }}</th>
                                        <th>{{ $buku->tahun_terbit }}</th>
                                        <th>{{ $buku->penerbit }}</th>
                                        <th>{{ $buku->nama_kategori }}</th>
                                        <th>{{ $buku->sinopsis }}</th>
                                        <th>{{ $buku->status }}</th>
                                        <th>
                                            <a href="/admin/buku/{{ $buku->id }}/edit"class="border-0 badge bg-primary d-inline-block"><i class="bi bi-pencil-square"></i></a>
                                        </th>
                                    </tr>
                                    
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection