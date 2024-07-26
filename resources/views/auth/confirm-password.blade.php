<!-- resources/views/auth/confirm-password.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Password</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}">
</head>
<body>
    <br><br><br>
    <section class="confirm-password">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="{{ route('password.confirm') }}" method="POST">
                            @csrf
                            <h1>Konfirmasi Password</h1>
                            <p>Silakan konfirmasi password Anda sebelum melanjutkan.</p>
                            <label for="password">Password</label><br>
                            <input placeholder="Masukkan password" type="password" id="password" name="password" required autocomplete="current-password"><br><br>
                            <div>
                                <input type="submit" value="Konfirmasi Password">
                            </div>
                        </form>
                    </div>
                    <div class="lupa-password">
                        <a href="{{ route('password.request') }}">Lupa password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
