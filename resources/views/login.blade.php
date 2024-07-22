<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/loginform.css">
</head>
<body>
    <br><br><br>
    <section class="login-form">
        <div class="content-area">
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="" method="">
                            <h1>Login</h1>
                            <label for="username">Email</label><br>
                            <input placeholder="Masukkan email" type="text" id="username" name="username" value=""><br>
                            <label for="password">Password</label><br>
                            <input placeholder="Masukkan password" type="password" id="password" name="password" value=""><br><br>
                            <div>
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                    <div  class="lupa-password">
                        <a href="">Belum punya akun?</a>
                        <a href="">Lupa password</a>
                    </div>
                </div>
            </div>      
        </div>
    </section>
    <section class="register-form" >
        <div class="content-area" hidden>
            <div class="form-image-container">
                <div class="form-image"></div>
                <div class="form-container">
                    <div class="form">
                        <form action="" method="">
                            <h1>Daftar</h1>
                            <label for="username">Nama</label><br>
                            <input placeholder="Masukkan nama" type="text" id="username" name="username" value=""><br>
                            <label for="password">Email</label><br>
                            <input placeholder="Masukkan email" type="text" id="password" name="password" value=""><br><br>
                            <label for="username">Password</label><br>
                            <input placeholder="Masukkan password" type="password" id="username" name="username" value=""><br>
                            <label for="password">Konfirmasi password</label><br>
                            <input placeholder="Konfirmasi password" type="password" id="password" name="password" value=""><br><br>
                            <div>
                                <input type="submit" value="Daftar">
                            </div>
                          </form>
                    </div>
                    <div  class="lupa-password">
                        <a href="">Sudah punya akun?</a>
                    </div>
                </div>
            </div>      
        </div>
    </section>
</body>
</html>
