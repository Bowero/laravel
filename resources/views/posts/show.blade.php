<html>
<head>
    <title>Project Showcase</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
<div class="container">
    <div class="auth-buttons">
        @auth
            <a class="auth-button" href="{{ route('posts.edit', $post) }}">Bewerk</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <input class="auth-button" type="submit" value="Verwijder">
            </form>
            <a class="auth-button" href="{{ route('posts.index') }}">Bekijk alles</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="auth-button" type="submit" value="Log uit">
            </form>
        @else
            <a class="auth-button" href="{{ route('login') }}">Log in</a>
            <a class="auth-button" href="{{ route('register') }}">Maak een account aan</a>
        @endauth
    </div>
    <div class="big-card">
        <img src="{{ asset($post->getImagePath()) }}">
        <div>
            <h1>{{ $post->title }}</h1>
            <h3>{{ $post->user->name }}</h3>
            <p>{!! nl2br($post->description) !!}</p>
        </div>
    </div>
</div>
</body>
</html>
