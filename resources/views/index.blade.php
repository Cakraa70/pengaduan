<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Pengaduan Masyarakat | @yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container" style="background-color:rgb(253, 253, 253); padding: 20px; border-radius: 10px;">
        <!-- Header -->
        <div class="alert text-center" style="background-color:rgb(42, 88, 96); color:rgb(0, 0, 0); padding: 15px; border-radius: 5px;">
            <h4 style="margin-bottom: 0px;">
                <b>Selamat Datang</b> di Layanan Pengaduan Masyarakat
            </h4>
        </div>

        <!-- Menu -->
        <nav>
            @include('menu')
        </nav>

        <!-- Banner -->
        <section class="banner mb-4">
            @include('banner')
        </section>

        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3">
                @include('sidebar')
            </aside>

            <!-- Konten Utama -->
            <main class="col-md-9">
                @include('konten')
            </main>
        </div>

        <!-- Footer -->
        <footer class="mt-4">
            @include('footer')
        </footer>
    </div>
</body>
</html>
