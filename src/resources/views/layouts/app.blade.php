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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        li {
            list-style-type: none;
        }

        #msg-icon:hover {
            position: relative;
            /* padding-bottom: 20px; */
            transform: translateY(-10%);
            transition: all 0.5s;
        }

        #msg-icon {
            transition: all 0.5s;
            cursor: pointer;
        }
    </style>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <img src="/img/postground-logo.png" alt="Twitter" width="100" height="auto"> </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    @if(auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                    @endif
                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">


                        @yield('content')

                    </div>
                    @if(auth()->check())
                    <div class="lg:w-1/6 bg-gray-100 border-solid border border-gray-300 rounded-lg p-5 h-full">
                        @include('_friends-list')
                    </div>
                    @endif
                </div>
            </main>
        </section>
    </div>
</body>

</html>