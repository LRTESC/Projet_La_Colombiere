<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brice bdd</title>

    @foreach($products as $product)
        <h1>{{ $product->Name }}</h1>
        <h3>{{$product->Description}}</h3>
        <p>Quantité : {{$product->Stock}}</p>
        <p>{{$product->Price}} €</p>
    @endforeach
</head>
<body>

</body>
</html>
