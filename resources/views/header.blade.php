<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <header class="py-5">
        <div class="container">
            <ul class="d-flex justify-content-around list-unstyled">
                <li><a href="{{route('home')}}">Главная</a></li>
                <li><a href="{{route('departaments.index')}}">Департаменты</a></li>
                <li><a href="{{route('positions.index')}}">Отделы</a></li>
            </ul>
        </div>
    </header>