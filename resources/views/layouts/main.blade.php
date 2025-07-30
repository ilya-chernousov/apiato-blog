<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>{{ $pageTitle ?? 'ApiatoBlog' }}</title>
</head>
<body>
    <div class="container mx-auto">
        <header class="header">
            <div class="header__content min-h-20 flex justify-between items-center">
                <a href="{{ route('index') }}" class="header__logo font-bold text-3xl">ApiatoBlog</a>
                <div class="header__profile">
                    @auth('web')
                        <a href="{{ route('filament.admin.pages.dashboard')  }}" class="header__profile-link">Админ-панель</a>
                    @else
                        <a href="{{ route('filament.admin.auth.login')  }}" class="header__profile-link">Войти</a>
                    @endauth
                </div>
            </div>
        </header>

        <main class="main">
            @yield('content')
        </main>
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
