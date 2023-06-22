@extends('admin.layouts.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4" style="min-height: 733px;">
            <div class="card">
                <div class="card-header">
                    Data Kelola Buku
                </div>

                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            @if(session()->has('error'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Status</th>
                                    <th>Pengembalian Buku</th>
                                </tr>
                                @foreach ($peminjamans as $peminjaman)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $peminjaman->name }}</th>
                                    <th>{{ $peminjaman->email }}</th>
                                    <th>{{ $peminjaman->judul }}</th>
                                    <th>{{ $peminjaman->tanggal_pinjam }}</th>
                                    <th>{{ $peminjaman->tanggal_kembali }}</th>
                                    <th>{{ $peminjaman->status }}</th>
                                    <th>
                                        <form action="/admin/peminjaman/{{ $peminjaman->id }}" method="post" class="d-inline-block">
                                            @method('patch')
                                            @csrf
                                            @if ($peminjaman->status != "Belum Kembali")
                                                
                                            <button class=" badge bg-succes" onclick="return confirm('Buku {{ $peminjaman->judul }} dikembalikan?')" disabled><i class="bi bi-check-square"></i></button>
                                            @else
                                            <button class=" badge bg-succes" onclick="return confirm('Buku {{ $peminjaman->judul }} dikembalikan?')"><i class="bi bi-check-square"></i></button>
                                                
                                            @endif
                                        </form>
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