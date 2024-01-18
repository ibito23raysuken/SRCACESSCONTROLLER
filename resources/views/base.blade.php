<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Access Control</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-submenu@3.0.1/dist/css/bootstrap-submenu.css">
        <style>

        </style>
    </head>
    <body >
        <header>
            <!-- En-tête de la page (barre de navigation, titre, etc.) -->
            @include('modal.navbar')
        </header>

        <main class="mb-5 pb-5 ">
            @stack('style')
            @include('modal.flash')
            @yield('content')
            @stack('scripts')
        </main>
        @include('modal.footer')
    </body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-submenu@3.0.1/dist/js/bootstrap-submenu.js" defer></script>
        <script>
            $(document).ready(function(){
                $('.sub_menu').on("click", function(e){
                    $('.sub_menu').not(this).find('.dropdown-menu').hide();
                    $(this).find('.dropdown-menu').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
                $('.subsubmenu').on("click", function(e){
                        var href = $(this).attr('href');
                        console.log(href);
                        window.location.href = $(this).attr('href');
                    });
                $(document).on("click", function(e){
                    if ($(e.target).closest('.sub_menu').length === 0) {
                        $('.sub_menu .dropdown-menu').hide();
                    }
                });
            });

        </script>
</html>
