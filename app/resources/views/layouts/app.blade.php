<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'auto.by') }}</title>
    <script src="{{ mix('js/app.js', 'build') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="header-logo navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'auto.by') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-main-menu" aria-controls="header-main-menu" aria-expanded="false" aria-label="Меню">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="header-main-menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('adverts') }}">Объявления</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Войти</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account.home') }}">Профиль</a>
                                    <a class="dropdown-item" href="{{ route('account.adverts.index') }}">Объявления</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выход</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @section('breadcrumbs', Breadcrumbs::render())
    @yield('breadcrumbs')
    <main class="py-4">
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>
