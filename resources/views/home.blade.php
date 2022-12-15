<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PrimiPassi</title>
</head>

<body>

    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col"><a class='btn btn-primary' href="{{ route('list') }}">{{ $List }}</a></div>
                <div class="col"><a class='btn btn-primary' href="{{ route('movie') }}">{{ $Movies }}</a></div>
                <div class="col"><a class='btn btn-primary' href="{{ route('food') }}">{{ $Foods }}</a></div>
            </div>
        </div>

    </header>

    <style>
        header {
            background-color: lightgreen;
            height: 20vh;
        }
    </style>

</body>

</html>
