
<!DOCTYPE html>
<html>

<head>
    <!-- Letakkan 3 script meta tag berikut di head; deskripsi meta yang lain boleh setelah 3 tags ini -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end Letakkan-->

    <meta name="description" content="">
    <meta name="author" content="Lufi">
    <link rel="icon" href="image/favicon.ico">

    <title>App Name - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/praktekbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{ asset('public/praktekbootstrap/css/jquery-ui.css') }}" rel="stylesheet">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            background-color: #f5f5f5;
        }

        body>.container {
            padding: 60px 15px 0;
        }

        .container .text-muted {
            margin: 20px 0;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }
    </style>
</head>

<body>
    <!-- Fixed Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Membuat menu responsive (tampilan smartphone san tablet) -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="#">POLINES</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Data Mahasiswa</a></li>
                </ul>
            </div>
            <!--/.nav-collapse-->
        </div>
    </nav>

    @yield('content')


    <!-- Bootstrap core JavaScript ========================= -->
    <!-- Letakan JavaScript dibagian  akhir supaya loading web lebih cepat -->
    <script src="{{ asset('public/praktekbootstrap/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/praktekbootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('public/praktekbootstrap/js/jquery-ui.js') }}"></script>
</body>

</html>