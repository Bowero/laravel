<html>
<head>
    <title>Project Showcase</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
<div class="container">
    <div class="auth-buttons">
        @auth
            <a class="auth-button" href="{{ route('posts.create') }}">Maak een nieuw post aan</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="auth-button" type="submit" value="Log uit">
            </form>
        @else
            <a class="auth-button" href="{{ route('login') }}">Log in</a>
            <a class="auth-button" href="{{ route('register') }}">Maak een account aan</a>
        @endauth
    </div>

    {{--    TODO Opdracht 3: Maak dit dynamisch en voor alle Posts      --}}
    <a href="">
        <div class="card">
            <img
                src="https://www.zooplus.nl/magazine/wp-content/uploads/2018/08/arriv%C3%A9e-dun-chaton-%C3%A0-la-maison-1024x730.jpeg">
            <div>
                <h1>Schattige kitten</h1>
                <h3>Coen</h3>
            </div>
        </div>
    </a>
    {{--    Eind      --}}

</div>
</body>
</html>
