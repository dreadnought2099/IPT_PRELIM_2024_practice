<!DOCTYPE html>
<html>
<head>
    <title>Picture Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            height: 430px; /* Set a fixed height */
            object-fit: cover; /* Maintain aspect ratio and cover the area */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Picture Page</h1>
        <nav>
            <a href="{{ route('home.page') }}">Home Page</a> |
            <a href="{{ route('item.page') }}">Item Page</a> |
            <a>Picture Page</a>
        </nav>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src={{asset('images/Picsart_23-10-31_18-30-26-635.jpg') }} class="card-img-top" alt="Picture 1">
                    <div class="card-body">
                        <p class="card-text">Description for Picture 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src={{asset('images/retouch_2024050619105728.jpg') }} class="card-img-top" alt="Picture 2">
                    <div class="card-body ">
                        <p class="card-text">Description for Picture 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src={{asset('images/retouch_2024050619112097.jpg') }} class="card-img-top" alt="Picture 3">
                    <div class="card-body">
                        <p class="card-text">Description for Picture 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
