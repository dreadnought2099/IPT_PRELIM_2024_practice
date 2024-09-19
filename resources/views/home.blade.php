<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Home Page</h1>
        <nav>
            <a>Home Page</a> |
            <a href="{{ route('item.page') }}">Item Page</a> |
            <a href="{{ route('picture.page') }}">Picture Page</a>
        </nav>
        <img class="img-fluid" src="/images/3840x2160.jpg" alt="Guardians of the Galaxy">
    </div>
</body>
</html>
