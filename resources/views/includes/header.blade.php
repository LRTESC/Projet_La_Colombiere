<header class="d-flex align-items-center justify-content-between topbar">
    <div class="topbar_wrapper justify-content-between">
        <a href="{{route('home')}}">
            <img class="logo" alt="logo devialet" src="{{asset('storage/pictures/svg-0.svg')}}"/>
        </a>
    </div>
    <div class="menu justify-space-between">
        <a href="{{route('product')}}">
            <span>Enceintes</span>
        </a>
        <span>Enceintes portables</span>
        <span>Barre de son</span>
        <span>Ecouteurs</span>
        <span>Amplificateurs</span>
        <span>Cadeaux</span>
    </div>
    <div class="icons-left">
        @auth()
            <a href="{{route('register_create')}}">
                <img alt="account" src="{{asset('storage/pictures/manage_accounts.svg')}}"/>
            </a>
        @else
            <a href="{{route('register_create')}}">
                <img alt="account" src="{{asset('storage/pictures/person_add.svg')}}"/>
            </a>
        @endauth
        <img alt="map" src="{{asset('storage/pictures/svg-2.svg')}}"/>
        <img alt="cart" src="{{asset('storage/pictures/svg-3.svg')}}"/>
    </div>
</header>
