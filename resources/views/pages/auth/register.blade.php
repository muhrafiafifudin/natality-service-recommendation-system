<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Login</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

        <!-- Fonts and icons -->
        <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Open+Sans:300,400,600,700"]},
                custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/azzara.min.css') }}">
    </head>
    <body class="login">
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">Buat Akun Baru</h3>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="login-form">
                        <div class="form-group">
                            <label for="name" class="placeholder"><b>Nama</b></label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class="placeholder"><b>Alamat</b></label>
                            <input name="address" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="placeholder"><b>Email</b></label>
                            <input name="email" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder"><b>Password</b></label>
                            <div class="position-relative">
                                <input id="password" name="password" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="flaticon-interface"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="placeholder"><b>Konfirmasi Password</b></label>
                            <div class="position-relative">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="flaticon-interface"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-action-d-flex mb-3 justify-content-center">
                            <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Daftar</button>
                        </div>
                        <div class="login-account">
                            <span class="msg">Sudah memiliki akun ?</span>
                            <a href="{{ route('login') }}">Masuk</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/ready.js') }}"></script>
    </body>
</html>
