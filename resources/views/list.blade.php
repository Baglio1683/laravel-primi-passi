<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>List</title>
</head>

<body>


    <h1>{{ $Hello }}</h1>
    <ul>
        @foreach ($list_people as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Home</a>

</body>

</html>
