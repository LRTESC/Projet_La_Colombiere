<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brice bdd</title>

    @foreach($products as $product)
        <h1>{{ $product->name }}</h1>
        <h3>{{$product->description}}</h3>
        <p>Quantité : {{$product->available}}</p>
        <p>{{$product->price}} €</p>
    @endforeach
</head>
<body>

</body>
</html>
