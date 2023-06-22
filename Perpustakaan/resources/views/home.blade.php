@extends('layouts/main')

@section('container')
<div class="judul container-fluid p-5 text-white text-center " >
  
  <div class="row justify-content-center m-2">
    <div class="col-6">
      <form class="d-flex" action="{{ route('search') }}" method="get">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Cari Judul Buku" aria-label="Search" name="search">
        <button class="btn btn-outline-light btn-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
<!-- <img src="book2.jpeg" class="card-img-top" alt="..." width="100" height="200"> -->

<div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active slidehome">
      
      <!-- Background image -->
<div
class="bg-image"
style="
background-image: url('https://i.pinimg.com/564x/67/18/22/671822c2f63dd5f65d8fd15c9710420b.jpg');
height: 100vh;
"
>
<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
<div class="d-flex justify-content-center align-items-center h-100">
  
</div>
</div>
</div>
<!-- Background image -->
      
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Selamat Datang Di Perpustakaan</h1>
          @auth
          <h2>{{  auth()->user()->name }}</h2> 
              
          @endauth
          <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
        </div>
      </div>
    </div>
    <!--slide 2-->
    <div class="carousel-item">
      <!-- Background image -->
<div
class="bg-image"
style="
background-image: url('https://i.pinimg.com/564x/2f/c8/85/2fc88514b7874668a593195b12868f61.jpg');
height: 100vh;
"
>
<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
<div class="d-flex justify-content-center align-items-center h-100">
  
</div>
</div>
</div>
<!-- Background image -->
      
      <div class="container">
        <div class="carousel-caption">
          <h1>Jika Anda tidak suka membaca, Anda belum menemukan buku yang tepat.</h2>
            <p>―JK Rowling.</p> 
          <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
        </div>
      </div>
    </div>
    <!--slide 3--> 
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#FFD95A"/></svg>
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Hubungi Kami</h1>
          
          <p><a class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Klik Disini!</a></p>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            view
          </button> -->
          
          <!-- Modal -->
          
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Wiranata Community</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <p>Jl. Manggis, NTT
      kode pos 75579.</p> 
    
     <p>Telp +628818769346 Fax. +628818769346</p> 
     <p>Instagram   : @Wiranata_Community</p>
     <p>Email       : wiranatacommunity@gmail.com</p>
     <a href="https://wa.me/628818769346">Hubungi WA</a>

    </div>
    
  </div>
</div>
</div>
 <!-- Carousel wrapper -->
   <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>



    <!-- Controls -->
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel wrapper -->
  
{{-- 
<div class="judul container-fluid p-5 text-white text-center">
    @auth
      <h1>Selamat Datang Di Perpustakaan Kota, {{ auth()->user()->name }}</h1>
    @endauth
    <p>Resize this responsive page to see the effect!</p> 
    <img src="../img/book2.jpeg" class="card-img-top" alt="..." width="100" height="200">
</div> --}}
@endsection
