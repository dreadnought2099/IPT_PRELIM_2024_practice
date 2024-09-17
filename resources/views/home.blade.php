<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Home Page</h1>
        <nav>
            <a href="{{ route('item.page') }}">Item Page</a> |
            <a href="{{ route('picture.page') }}">Picture Page</a>
        </nav>
    </div>
</body>
</html>
