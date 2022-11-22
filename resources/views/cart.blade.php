@include('includes.head')
<div class="bg"
     style="background-image: url('{{asset('storage/pictures/checkout.webp')}}')">
    <div class="bg-white">
        <div class="d-flex justify-content-center">
            <img class="logo" src="{{asset('storage/pictures/svg-0.svg')}}">
        </div>
    </div>
    <div class="bg-light box-icons">
        <div class="panier">
            <img src="{{asset('storage/pictures/Mon_panier-2.svg')}}">
            <h1>PANIER</h1>
        </div>
    </div>
    <div class="panier_wrapper">
        <div class="products">

        </div>
        <div class="options">

        </div>
    </div>
</div>
@include('includes.footer')
