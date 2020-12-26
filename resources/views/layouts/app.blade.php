<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!---

    Create post controller
    crate post model
    edit schema field
    edit string length
    create db 
    modify .env
    add data through tinker
    {
        php artisan tinker
        App\Models\Post::count()
        $post = new App\Models\Post();
        $post->title = "text";
        $post->body = "text";

    }



    

    --->
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
