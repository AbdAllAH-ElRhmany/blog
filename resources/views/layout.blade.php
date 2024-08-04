<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <h1>My Blog</h1>
    <nav>
        <a href="{{ route('posts.index') }}">Home</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

</body>
</html>

