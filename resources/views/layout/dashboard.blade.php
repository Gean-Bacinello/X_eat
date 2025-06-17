<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/FAVICON_xeat.ico') }}">
    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/menu/menu-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alimentos/alimentos.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <nav class="menu_lateral">

        <div class="btn_expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item_menu {{ Route::is('home.*') ? 'ativo' : '' }}">
                <a href="{{ route('home.index') }}">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item_menu {{ Route::is('dashboard.*') ? 'ativo' : '' }}">
                <a href="{{ route('dashboard.index') }}">
                    <span class="icon"><i class="bi bi-columns"></i></span>
                    <span class="txt-link">Dashboard</span>
                </a>
            </li>
            <li class="item_menu {{ Route::is('alimentos.*') ? 'ativo' : '' }}">
                <a href="{{ route('alimentos.index') }}">
                    <span class="icon"><i class="bi bi-egg-fill"></i></span>
                    <span class="txt-link">Alimentos</span>
                </a>
            </li>
            <li class="item_menu {{ Route::is('pacientes.*') ? 'ativo' : '' }}">
                <a href="{{ route('pacientes.index') }}">
                    <span class="icon"><i class="bi bi-people-fill"></i></span>
                    <span class="txt-link">Pacientes</span>
                </a>
            </li>
            <li class="item_menu {{ Route::is('agenda.*') ? 'ativo' : '' }}">
                <a href="{{ route('agenda.index')}}">
                    <span class="icon"><i class="bi bi-card-checklist"></i></span>
                    <span class="txt-link">Agenda</span>
                </a>
            </li>
            <li class="item_menu {{ Route::is('login.*') ? 'ativo' : '' }}">
                <a href="#">
                    <span class="icon"><i class="bi bi-person-circle"></i></i></span>
                    <span class="txt-link">Conta</span>
                </a>
            </li>
        </ul>

    </nav>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('js/menu/menu-dashboard.js') }}"></script>
</body>

</html>
