// <!DOCTYPE html>
// <html>
// <head>
//     <title>Home Page</title>
//     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
// </head>
// <body>
//     <div class="container">
//         <h1>Home Page</h1>
//         <nav>
//             <a href="{{ route('item.page') }}">Item Page</a> |
//             <a href="{{ route('picture.page') }}">Picture Page</a>
//         </nav>
//     </div>
// </body>
// </html>

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
    </div>
</body>
</html>

