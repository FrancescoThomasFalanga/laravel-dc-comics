{{-- questo è il Documento HTML che verrà stampato in pagina, includendo (o importando) le mie varie partials (o components) comprese anche di 'content' all'interno del quale
sarò io a decidere cosa andare a stampare a seconda della pagina visualizzata --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC</title>

    <link rel="Shortcut Icon" type="image/png" href="{{asset('img/favicon.ico')}}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    {{-- IMPORTO L'HEADER --}}
    @include('partials/header')


    {{-- IMPORTO IL CONTENT A SECONDA DELLA PAGINA VISUALIZZATA --}}
    @yield('content')


    {{-- IMPORTO LA SEZIONE DELLE INFO (VISA,MERCHANDISE,DIGITAL ECC...) --}}
    @include('partials/infoSection')


    {{-- IMPORTO L'UPPER FOOTER --}}
    @include('partials/upperFooter')


    {{-- IMPORTO IL BOTTOM FOOTER --}}
    @include('partials/footer')

</body>

</html>