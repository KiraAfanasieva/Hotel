<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Готель')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Система Готель</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Головна</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">Про проєкт</a></li>
                    <li class="nav-item"><a class="nav-link" href="/rooms">Номерний фонд</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4 flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            &copy; {{ date('Y') }} Курсовий проєкт. Усі права захищено.
        </div>
    </footer>

</body>
</html>