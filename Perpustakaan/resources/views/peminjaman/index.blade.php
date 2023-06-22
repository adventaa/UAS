@extends('layouts/main')
@section('container')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Peminjaman</th>
            <th scope="col">Pengembalian</th>
        
        </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $pinjam)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pinjam->judul }}</td>
                <td>{{ $pinjam->tanggal_pinjam }}</td>
                <td>{{ $pinjam->tanggal_kembali }}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection