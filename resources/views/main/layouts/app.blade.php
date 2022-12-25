<!doctype html>
<html lang="fa">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="HTML5,CSS3,HTML,Template,single-page,Alysa - Personal Portfolio Template" >
        <meta name="description" content="Alysa - Personal Portfolio Template">
        <meta name="author" content="Barat Hadian">
        <title>Alysa - قالب HTML آلیسا ، پوسته شخصی نمونه کار و گالری</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <link rel="stylesheet" href="{{ asset('assets/css/calStyles.css') }}"/>

        <x-css-assets />
        <livewire:styles />
    </head>

    <body id="home" data-spy="scroll" data-offset="70" class="shabnam c-bg-light">

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->

        <x-header />

        <!-- End Navbar Area -->

        @yield('content')

        <!-- Start Copyright Area -->

        <x-copy-right />
        <!-- End Copyright Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>


        <x-js-assets />

    </body>

    <livewire:scripts />

</html>