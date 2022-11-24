@include('includes.head')
@include('includes.header')


    <section>
        <div>
            <video autoplay loop muted preload="auto" class="twic-poster-done">
                <source src="{{asset('storage/movies/Phantom_I_Hero_Video_3.mp4')}}" type="video/mp4" />
            </video>
        </div>
    </section>

    <section>
        <div class="container-b1">
            <p class="link-top-product">
                <a href="/">
                    Accueil
                </a>
                /
                <a href="/product">
                    Phantom I
                </a>
            </p>

        </div>

    </section>

    <section>
        <div class="container-b2">
            <h1 class="title-product-1">Phantom I</h1>
            <p class="title-product-2">
                Le son implosif
            </p>
        </div>
    </section>


    <section>
        <div class="container-b3">
            <div>
                <h3 class="title-product-3">
                    Une classe à part.
                </h3>
                <p class="p-product-1">
                    L'enceinte Phantom I déchaîne l'impact physique d'un son haute fidélité et ultra-dense avec <br>
                    plus de puissance, de netteté et de précision que n'importe quelle autre enceinte connectée.
                </p>
            </div>


            <div>
                <h3 class="title-product-3">
                    Singulier et iconoclaste.
                </h3>
                <p class="p-product-1">
                    Phantom rassemble des technologies révolutionnaires pour offrir une expérience d'écoute <br>
                    intense, de celles qui agitent vos muscles et votre âme.
                </p>
            </div>
        </div>
    </section>


    <section>
        <img class="barrespec" src="{{asset('storage/pictures/barrespec.png')}}" alt="barrespec">
    </section>


    <section>
        <div class="implosivdiv">
            <img class="implosivimg" src="{{asset('storage/pictures/implosivimg.png')}}" alt="implosivimg">
        </div>
    </section>

    <section>
        <div class="column-product">

            <div class="product-c-1">
                <div class="img-space-around">
                    <img class="img-space-product" src="{{asset('storage/pictures/Product1.webp')}}" alt="Product1">
                </div>
                <div class="product-d-1">
                    @foreach($product1 as $product1)
                        <h4 class="title-product-btmp">
                            {{$product1->Name}}
                        </h4>
                        <h5 class="title-product-perfspec">
                            Performances
                        </h5>
                        <h6 class="spec-product">
                            Puissance totale d’amplification
                        </h6>
                        <p class="info-product">
                            500 W RMS
                        </p>
                        <h6 class="spec-product">
                            Réponse en fréquence (bande-passante)
                        </h6>
                        <p class="info-product">
                            Bande passante: 16Hz à 25kHz (@-6dB)<br>
                            Précision de la réponse en fréquence: ± 2dB de 20Hz<br>
                            à 20kHz
                        </p>
                        <h6 class="spec-product">
                            Niveau sonore maximal
                        </h6>
                        <p class="info-product">
                            103 dB SPL à 1 mètre
                        </p>
                        <h5 class="title-product-perfspec">
                            Spécifications
                        </h5>
                        <h6 class="spec-product">
                            Haut-parleurs
                        </h6>
                        <p class="info-product">
                            Haut-Parleur Tweeter à dôme aluminium<br>
                            Haut-Parleur Medium à dôme aluminium<br>
                            Haut-Parleurs Grave à dôme aluminium
                        </p>
                        <h6 class="spec-product">
                            Finition
                        </h6>
                        <p class="info-product">
                            Corps blanc RAL 9016<br>
                            Flasques latérales en inox poli<br>
                            Haut-parleurs de grave blanc RAL 9016
                        </p>
                        <h4 class="price-product-list">
                            {{$product1->Price}}
                        </h4>
                        <div class="div-button">
                            <a href="{{route('productid',['id' => 'phantom-i-103db'])}}"><button class="buy-button-product">ACHETER</button></a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="product-c-2">
                <div class="img-space-around">
                    <img src="{{asset('storage/pictures/Product2.webp')}}" alt="Product2">
                </div>
                <div class="product-d-1">
                    @foreach($product2 as $product2)
                        <h4 class="title-product-btmp">
                            {{$product2->Name}}
                        </h4>
                        <h5 class="title-product-perfspec">
                            Performances
                        </h5>
                        <h6 class="spec-product">
                            Puissance totale d’amplification
                        </h6>
                        <p class="info-product">
                            1100 W RMS
                        </p>
                        <h6 class="spec-product">
                            Réponse en fréquence (bande-passante)
                        </h6>
                        <p class="info-product">
                            Bande passante: 14Hz à 27kHz (@-6dB)<br>
                            Précision de la réponse en fréquence: ± 2dB de 20Hz<br>
                            à 20kHz
                        </p>
                        <h6 class="spec-product">
                            Niveau sonore maximal
                        </h6>
                        <p class="info-product">
                            108 dB SPL à 1 mètre
                        </p>
                        <h5 class="title-product-perfspec">
                            Spécifications
                        </h5>
                        <h6 class="spec-product">
                            Haut-parleurs
                        </h6>
                        <p class="info-product">
                            Haut-Parleur Tweeter à dôme titane pur de grade 1<br>
                            Haut-Parleur Medium à dôme aluminium<br>
                            Haut-Parleurs Grave à dôme aluminium
                        </p>
                        <h6 class="spec-product">
                            Finition
                        </h6>
                        <p class="info-product">
                            Corps blanc RAL 9016<br>
                            Flasques latérales or rose plaquées 22 carat<br>
                            Haut-parleurs de grave blanc RAL 9016
                        </p>
                        <h4 class="price-product-list">
                            {{$product2->Price}}
                        </h4>
                        <div class="div-button">
                            <a href="{{route('productid',['id' => 'phantom-i-108db'])}}"><button class="buy-button-product">ACHETER</button></a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="product-c-3">
                <div class="img-space-around">
                    <img src="{{asset('storage/pictures/Product3.webp')}}" alt="Product3">
                </div>
                <div class="product-d-1">
                    @foreach($product3 as $product3)
                        <h4 class="title-product-btmp">
                            {{$product3->Name}}
                        </h4>
                        <h5 class="title-product-perfspec">
                            Performances
                        </h5>
                        <h6 class="spec-product">
                            Puissance totale d’amplification
                        </h6>
                        <p class="info-product">
                            1100 Watts RMS
                        </p>
                        <h6 class="spec-product">
                            Réponse en fréquence (bande-passante)
                        </h6>
                        <p class="info-product">
                            Bande passante: 14Hz à 27kHz (@-6dB)<br>
                            Précision de la réponse en fréquence: ± 2dB de 20Hz<br>
                            à 20kHz
                        </p>
                        <h6 class="spec-product">
                            Niveau sonore maximal
                        </h6>
                        <p class="info-product">
                            108 dB SPL à 1 mètre
                        </p>
                        <h5 class="title-product-perfspec">
                            Spécifications
                        </h5>
                        <h6 class="spec-product">
                            Haut-parleurs
                        </h6>
                        <p class="info-product">
                            Haut-Parleur Tweeter à dôme titane pur de grade 1<br>
                            Haut-Parleur Medium à dôme aluminium<br>
                            Haut-Parleurs Grave à dôme aluminium
                        </p>
                        <h6 class="spec-product">
                            Finition
                        </h6>
                        <p class="info-product">
                            Corps blanc RAL 9016<br>
                            Flasques latérales recouvertes de feuilles de<br>
                            moongold, alliage inoxydable de palladium et d’or
                            jaune<br>
                            Haut-parleurs de grave blanc RAL 9016
                        </p>
                        <h4 class="price-product-list2">
                            {{$product3->Price}}
                        </h4>
                        <div class="div-button">
                            <a href="{{route('productid',['id' => 'phantom-i-108db-opera'])}}"><button class="buy-button-product">ACHETER</button></a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>



{{--<span><?php--}}
{{--      $db = \Illuminate\Support\Facades\DB::table('Product')->where('idProduct', 1)->first();--}}
{{--      echo $db->Name;--}}
{{--      ?></span>--}}

@include('includes.footer')
