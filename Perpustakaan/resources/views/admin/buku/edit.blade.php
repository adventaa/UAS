@extends('admin.layouts.main')
@section('container')
<form method="post" action="/admin/buku/{{ $buku->id }}" class="m-3">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <label for="inputIsbn" class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-5">
          <input type="isbn" class="form-control" id="inputIsbn" name="isbn" value="{{ $buku->isbn }}">
        </div>
      </div>

    <div class="row mb-3">
      <label for="inputJudul" class="col-sm-2 col-form-label">Judul Buku</label>
      <div class="col-sm-5">
        <input type="judul" class="form-control" id="inputJudul" name="judul"value="{{ $buku->judul }}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="inputTahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
        <div class="col-sm-5">
          <input type="tahun" class="form-control" id="inputTahun" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
        </div>
      </div>

    <div class="row mb-3">
      <label for="inputPenulis" class="col-sm-2 col-form-label">Penulis</label>
      <div class="col-sm-5">
        <input type="penulis" class="form-control" id="inputPenulis" name="penerbit" value="{{ $buku->penerbit }}">
      </div>
    </div>

    <div class="row mb-3">
        <label for="inputKategori" class="col-sm-2 col-form-label">Kategori Buku</label>
        <div class="col-sm-5">
            <select class="form-select" id="specificSizeSelect" name="id_kategori">
                <option selected>Choose...</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
              </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputSinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
        <div class="col-sm-5">
            <textarea class="form-control" id="inputSinopsis" rows="3" name="sinopsis">{{ $buku->sinopsis }}</textarea>
        </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection