<!-- resources/views/auth/forgot-password.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}">
</head>
<body>
    <br><br><br>
    <section class="forgot-password">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <h1>Lupa Password</h1>
                            <label for="email">Email</label><br>
                            <input placeholder="Masukkan email" type="text" id="email" name="email" value=""><br><br>
                            <div>
                                <input type="submit" value="Kirim Link Reset Password">
                            </div>
                        </form>
                    </div>
                    <div class="lupa-password">
                        <a href="{{ route('login') }}">Sudah punya akun?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
