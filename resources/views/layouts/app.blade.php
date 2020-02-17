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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aues.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('icon/aues.ico') }}" type="image/x-icon" />

</head>
<body class="bg-white">
    <div id="app">
        <nav class="navbar navbar-light bg-white d-flex justify-content-around align-items-center">
            <a class="navbar-brand" href="{{ route('numbers.list') }}">
                <img src="{{ asset('icon/aues.png') }}" alt="логотоп ауэс" width="250">
            </a>
        
            <div>
                <i>Телефон Контакт центра Университета</i> – <b class="text-aues">3 23 11 75</b>
                <br><i>Формат набора на внутренние номера</i> – <b class="text-aues">ХХХХ</b>
                <br><i>Формат набора на городские номера</i> – <b class="text-aues">ХХХ ХХ ХХ</b>
                <div class="text-center mt-3">
                    Скачать <a class="text-aues" href="{{ route('numbers.short') }}">Кратко</a> / <a class="text-aues" href="{{ route('numbers.full') }}">Всё</a>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
