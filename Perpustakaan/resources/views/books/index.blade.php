@extends('layouts/main')
@section('container')
<div class="dropdown-center mb-3 mt-3">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Pilih Kategori
    </button>
    <ul class="dropdown-menu">
        @foreach ($kategoris as $kategori)
        <li>
            <form action="/buku/{{ $kategori->id }}" method="post">
                @csrf
                <button class="dropdown-item border-0" type="submit">{{ $kategori->nama_kategori }}</button>
            </form>
        </li>
        @endforeach
    </ul>
  </div>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($bukus as $buku)
    <div class="col{{ $loop->iteration }}">
        <div class="card shadow-sm">
            {{-- <img src="../img/buku1.jpeg" class="card-img-top w-100" alt="..."> --}}
            <div class="card-body">
                <form action="/peminjaman" method="post">
                @csrf
                <input type="hidden" name="id_buku" value="{{ $buku->id }}">
                <input type="hidden" name="">
                <h3>{{ $buku->judul }}</h3>
                <p class="card-text">{{ $buku->penerbit }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $buku->id }}">
                            View
                          </button>
                          <div class="modal fade" id="exampleModal{{ $buku->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        {{ $buku->judul }}
                                    </h5>
                                    <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"
                                    ></button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Penulis : {{ $buku->penerbit }}</p>
                                    <p>Sinopsis : {{ $buku->sinopsis }}</p>
                                  </div>
                                </div>
                              </div>
                          </div>
                        @if ($buku->status==="Tidak Tersedia")
                            
                        <button type="submit" class="btn btn-sm btn-outline-secondary" disabled>Pesan</button>
                        @else
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Pesan</button>
                            
                        @endif
                    </form>
                    </div>
                    <small class="{{ $buku->status === 'Tersedia' ? 'text-success' : 'text-danger' }}">{{ $buku->status }}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Judul Buku
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>Penulis :</p>
            <p>Jumlah Buku :</p>
            <small
              class="status buku"
              style="color: rgb(3, 116, 254)"
              >jumlah halaman
            </small>
          </div>
        </div>
      </div>
  </div>

@endsection