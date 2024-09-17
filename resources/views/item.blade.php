<!DOCTYPE html>
<html>
<head>
    <title>Item Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Item Page</h1>
        <div class="row">
            <div class="col-md-4 mb-4 mr-2">
                <div class="card">
                    <img src={{asset('images/pastel.jpg') }} class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <p class="card-text">Item 1 Description</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src={{asset('images/9fbbb7b9e9741a797798e77006e8f6db.jpg') }} class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">Item 2 Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
