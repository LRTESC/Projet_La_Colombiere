<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript -->
    <!-- bootstrap -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <header class="d-flex align-items-center justify-content-between topbar">
        <div class="topbar_wrapper justify-content-between">
            <img class="logo" alt="logo devialet" src="{{asset('pictures/svg-0.svg')}}">
        </div>
        <div class="menu justify-space-between">
            <span>Enceintes</span>
            <span>Enceintes portables</span>
            <span>Barre de son</span>
            <span>Ecouteurs</span>
            <span>Amplificateurs</span>
            <span>Cadeaux</span>
        </div>
        <div class="icons-left">
            <img alt="account" src="{{asset('pictures/svg-1.svg')}}">
            <img alt="map" src="{{asset('pictures/svg-2.svg')}}">
            <img alt="cart" src="{{asset('pictures/svg-3.svg')}}">
        </div>
    </header>

</body>
</html>
