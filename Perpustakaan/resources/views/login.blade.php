<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/03adc290fd.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="wrapper">
            <h1>Login</h1>
            @if(session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                    @endif
            <form action="/login" method="post">
                @csrf
                <input type="text" placeholder="Username" name="name">
                <input type="password" placeholder="Password" name="password">
                <!-- <div class="recover">
                    <a href="#">Lupa Password</a>
                </div> -->
                <button type="submit">Login</button>
            </form>
            <div class="member">
                Tidak punya akun? <a href="/register">
                    Registrasi 
                </a>
            </div>
        </div>
</body>
</html>