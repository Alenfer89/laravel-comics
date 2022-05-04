<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>DC Comics - @yield('title')</title>

    {{-- custom style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    {{-- aggiungere bordo top azzurro e search bar a header --}}
    @include('partials.header')

    <main>
        {{-- creare una base con contenuto per la homepage --}}
        @section('main-content')
            <h1>homepage content here</h1>
        @endsection
        @yield('main-content')
        @yield('main-content-bottom')
    </main>


    {{-- finire ultima ul con i socials --}}
    @include('partials.footer')
    
</body>
</html>