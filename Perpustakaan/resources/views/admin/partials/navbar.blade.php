<nav class="navbar navbar-expand-lg navbar-transparant">
    <div class="container-fluid">
        <a href="/admin">
            <img src="/img/logo.png" class="rounded-circle" alt="Cinque Terre" width="60" height="60" id="myImage" onclick="showPopup()">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/admin">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilihan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/admin/buku">Data Buku</a></li>
                        <li><a class="dropdown-item" href="/admin/kategori">Data Kategori</a></li>
                        <li><a class="dropdown-item" href="/admin/user">Data User</a></li>
                        <li><a class="dropdown-item" href="/admin/peminjaman">Data Transaksi Buku</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link active btn btn-link m-0" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>