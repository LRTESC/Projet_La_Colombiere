@include('includes.head')
@include('includes.header')

{{--<h1>{{$id}}</h1>--}}

<div class="parent">
    <div class="item1">
        <div><img src="{{asset('storage/pictures/image-carousel1.webp')}}"></div>
        <div><img src="{{asset('storage/pictures/image-carousel3.webp')}}"></div>
        <div><img src="{{asset('storage/pictures/image-carousel4.webp')}}"></div>
        <div><img src="{{asset('storage/pictures/image-carousel2.webp')}}"></div>
    </div>
    <div class="item2">
        <img src="../storage/pictures/STEREO_11.jpg" alt="">

    </div>
    <div class="item3">
        <section class='FlexContainer'>

            <div><h1>{{$id->name}}</h1></div>
            <div><h5>{!! $id->description !!}</h5></div>
            <div class="mono-stereo">
                <button>MONO</button>
                <button>STEREO</button>
            </div>
            <div>{{$id->price}} €</div>


            <a href="{{route('cart_id', ['id' => $id])}}">
                <div>
                    <button class="panier">Ajouter au Panier</button>
                </div>
            </a>
        </section>
    </div>
</div>

<div class="mid">
    <div class="left"><H1>Absolument immersif.</H1></div>
    <div class="rigth"><H4>Phantom I 103 dB, avec sa Remote intègre l’ensemble des technologies de pointe Devialet pour
            un son haute fidélité et une densité sonore hors norme dans un format aussi compact. Ressentez l’impact
            physique du son comme jamais auparavant.
            Avec un second Phantom I 103 dB en stéréo, la scène sonore s'étend encore, l’écoute devient encore plus
            puissante, plus extrême. Absolument immersif.</H4></div>
</div>


@include('includes.footer')
