<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>

<h1>Site lindão</h1>
<div>
    @if (Auth::user())
        oii {{ Auth::user()->name }}
        <br>
        <a href="{{ route('logout') }}">Vaza</a>
        @else
        <a href="{{ route('login') }}">Faz login no site bobão</a>
    @endif
</div>
<div>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('produtos') }}">Produtos</a></li>
        <li><a href="{{ route('usuarios') }}">Usuários</a></li>
    </ul>
</div>
<hr>
@yield('content')

</body>
</html>
