@extends('admin.layouts.main')
@section('container')
    <!-- tabel data kategori -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4" style="min-height: 733px;">
                <div class="card">
                    <div class="card-header">
                        Data Kategori Buku
                    </div>
    
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Kategori</th>
                                        <th>Kategori</th>
                                    </tr>
    
                                    @foreach ($kategoris as $kategori)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $kategori->id }}</th>
                                            <th>{{ $kategori->nama_kategori }}</th>
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