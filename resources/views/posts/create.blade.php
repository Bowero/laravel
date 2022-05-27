<html>
<head>
    <title>Project Showcase</title>

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
<div class="container">
    <div class="auth-buttons">
        @auth
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
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Titel</label>
        <input id="title" name="title" type="text" placeholder="Titel" required>

        <label for="description">Omschrijving</label>
        <textarea id="description" name="description" placeholder="Omschrijving"></textarea>

        <label for="image">Afbeelding</label>
        <input id="image" name="image" type="file">

        <button class="auth-button" type="submit" style="width: 100%; margin-left: 0;">Maak post aan</button>
    </form>
</div>
</body>
</html>
