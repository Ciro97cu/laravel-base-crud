<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1f72ff4464.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Comics</title>
</head>
<body>
    @include("partials/header")
    @include("partials/jumbo")
    @yield('main')
    @include("partials/products")
    @include("partials/footer")
    <script src="js/carousel.js"></script>
</body>
</html>
{{-- @forelse ($arrayComics as $comic)
    <h1>{{$comic->title}}</h1>
@empty
    Errore
@endforelse --}}