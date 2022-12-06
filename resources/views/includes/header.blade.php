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
            <a class="d-flex justify-content-center align-items-center" href="{{route('register_create')}}">
                <p class="m-auto">{{auth()->user()->fname}} {{mb_substr(auth()->user()->lname, 0, 1)}}.</p>
                <img alt="account" src="{{asset('storage/pictures/manage_accounts.svg')}}"/>
            </a>
        @else
            <a href="{{route('register_create')}}">
                <img alt="register" src="{{asset('storage/pictures/person_add.svg')}}"/>
            </a>
        @endauth
        <img alt="map" src="{{asset('storage/pictures/svg-2.svg')}}"/>
        <a href="{{route('cart')}}">
            <img alt="cart" src="{{asset('storage/pictures/svg-3.svg')}}"/>
        </a>
        @auth()
            <form method="POST" action="/logout">
                @csrf
                <button>
                    <img alt="logout" src="{{asset('storage/pictures/logout.svg')}}"/>
                </button>
            </form>
        @else
            <a href="{{route('login')}}">
                <img alt="login" src="{{asset('storage/pictures/login.svg')}}"/>
            </a>
        @endauth
    </div>
</header>
