@include('includes.head')
@include('includes.header')
<div class="bg"
     style="background-image: url('{{asset('storage/pictures/checkout.webp')}}')">
    <div class="bg-light box-icons">
        <div class="panier">
            <img src="{{asset('storage/pictures/Mon_panier-2.svg')}}">
            <h1>PANIER</h1>
        </div>
    </div>
    <div class="panier_wrapper">

        @if (is_null($cart))
            <p class="panier_vide">Panier vide.<br><a href="/">Retourner à
                    l'accueil</a></p>
        @else
            :
            <div class="products">
                <div class="title_product">
                    <h2>VOTRE PANIER</h2>
                </div>
                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Prix Unitaire</th>
                        <th>Quantité</th>
                        <th>Sous-total</th>
                    </tr>
                    @foreach($cart->products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->pivot->price}}</td>
                            <td>{{$product->pivot->quantity}}</td>
                            <td>{{$product->pivot->price * $product->pivot->quantity}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="options">
                <div class="title_options">
                    <h2 class="syn">SYNTHESE</h2>
                </div>
                <div class="info_option">
{{--                                    <p>{{$customer->firstname}} {{$customer->lastname}}</p>--}}
{{--                                    <p>{{$customer->Adress}}</p>--}}
                    <p>LIVRAISON OFFERTE</p>
                    <p>DATE DE LIVRAISON ESTIMÉE : 25 DEC. 2022</p>
                </div>
                <div class="total_command">
{{--                                    <p>TOTAL HT : {{ $cart['total_ht'] }}</p>--}}
{{--                                    <p>TVA : {{ $cart['total_tva'] }}</p>--}}
{{--                                    <p>TOTAL TTC : {{ $cart['total_ht'] + $cart['total_tva'] }}</p>--}}
                    <button>COMMANDER</button>
                </div>
            </div>
        @endif;
    </div>
</div>
@include('includes.footer')
