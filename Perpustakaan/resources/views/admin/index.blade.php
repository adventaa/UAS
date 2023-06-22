@extends('admin.layouts.main')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
            <div class="jumbotron jumbotron-fluid">
                <div class="container" >
                    <center> 
                    <h1 class="display-4">Selamat Datang Admin!</h1>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mt-xl-5">
            <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                <h5 class="card-title">Data Buku</h5>
                <p class="card-text">Pengelolaan Buku</p>
                <a href="/admin/buku" class="btn btn-primary">Data Buku</a>
                </div>
            </div>
        </div>
   
        <div class="col mt-xl-5">
            <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">Kategori Buku</h5>
                  <p class="card-text">Pengelolaan Kategori Buku</p>
                  <a href="/admin/kategori" class="btn btn-primary">Kategori Buku</a>
                </div>
            </div>
        </div>

        <div class="col mt-xl-5">
            <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">Data Transaksi Buku</h5>
                  <p class="card-text">Peminjaman dan Pengembalian Buku</p>
                  <a href="/admin/peminjaman" class="btn btn-primary">Transaksi Buku</a>
                </div>
              </div>
        </div>

        <div class="col mt-xl-5">
            <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">Data User</h5>
                  <p class="card-text">Kelola User</p>
                  <a href="/admin/user" class="btn btn-primary">Data User</a>
                </div>
              </div>
        </div>

    </div>
</div>
<!-- akhir content -->

@endsection