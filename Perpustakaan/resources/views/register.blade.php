<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/03adc290fd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <h1>Registrasi</h1>
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form action="/register" method="post">
            @csrf
            <input type="text" placeholder="Username" name="name">
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Re-Enter Password" name="password2">
        <div class="terms">
            <input type="checkbox" id="checkbox">
            <label for="checkbox">Saya setuju dengan
                <a href="/syarat">Syarat dan Ketentuan</a>
            </label>
        </div>
        <button type="submit">Sign Up</button>
        </form>
        <div class="member">
            Sudah memiliki akun? <a href="/login">
                Login 
            </a>
        </div>
    </div>
</body>
</html>
