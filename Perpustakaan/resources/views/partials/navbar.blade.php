<nav class="navbar navbar-expand-lg navbar-transparant">
    <div class="container-fluid">
        <a href="#">
            <img src="/img/logo.png" class="rounded-circle" alt="Cinque Terre" width="60" height="60" id="myImage" onclick="showPopup()">
        </a>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/buku">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/peminjaman">Peminjaman</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                <form action="/logout" method="post">
                  @csrf
                <li class="nav-item">
                      <button class="btn btn-outline-light active" type="submit">Log Out</button>
                </li>
              </form>
                @else
                <li class="nav-item">
                  <a class="btn btn-outline-light text-decoration-none active" href="/login">Login</a>
                  
                  </li>    
                @endauth
            </ul>
        </div>
    </div>
</nav>