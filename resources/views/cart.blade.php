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
            <div class="title_product">
                <h2>VOTRE PANIER</h2>
            </div>
        </div>
        <div class="options">
            <div class="title_options">
                <h2 class="syn">SYNTHESE</h2>
            </div>
            <div class="info_option">
                <p>LIVRAISON OFFERTE</p>
                <p>DATE DE LIVRAISON ESTIMÉE : 25 NOV. 2022</p>
            </div>
            <div class="total_command">
                <p>TOTAL</p>
                <button>COMMANDER</button>
            </div>


        </div>
    </div>
</div>
@include('includes.footer')
