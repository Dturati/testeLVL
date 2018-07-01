<html>
    <head>
        <title>@yield('titulo')</title>
        <link href="{{asset('css/materialize/css/materialize.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Estoque</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('listar')}}">Home</a></li>
                <li><a href="{{route('novo')}}">Novo</a></li>
            </ul>
        </div>
    </nav>
<body>