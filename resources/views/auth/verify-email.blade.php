<!-- resources/views/auth/verify-email.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loginform.css') }}">
</head>
<body>
    <br><br><br>
    <section class="verify-email">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <h1>Verifikasi Alamat Email Anda</h1>
                        <p>Terima kasih telah mendaftar! Sebelum melanjutkan, silakan verifikasi alamat email Anda dengan mengklik tombol di bawah ini.</p>
                        <form action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <div>
                                <input type="submit" value="Kirim Ulang Email Verifikasi">
                            </div>
                        </form>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <div>
                                <input type="submit" value="Logout">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
