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
    @foreach($posts as $post)
        <a href="{{ route('posts.show', $post) }}">
            <div class="card">
                <img src="{{ asset($post->getImagePath()) }}">
                <div>
                    <h1>{{ $post->title }}</h1>
                    <h3>{{ $post->user->name }}</h3>
                </div>
            </div>
        </a>
    @endforeach
</div>
</body>
</html>
