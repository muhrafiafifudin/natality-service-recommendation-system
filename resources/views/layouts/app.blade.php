<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title> @yield('title') </title>
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

        @include('includes.style')
    </head>
    <body>
        <div class="wrapper">
            <div class="main-header" data-background-color="purple">

                @include('includes.header')

            </div>

            <!-- Sidebar -->
            @include('includes.sidebar')
            <!-- End Sidebar -->

            <!-- Sidebar -->
            @yield('content')
            <!-- End Sidebar -->
        </div>

        @include('includes.script')

        @stack('javascript')

    </body>
</html>
