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

            @foreach ($products as $product)
                <div class="product-c">
                    <div class="img-space-around">
                        <img class="img-space-product" src="{{asset('storage/pictures/Product' . $product->idProduct . '.webp')}}" alt="Product">
                    </div>
                    <div class="product-d-1">
                            <h4 class="title-product-btmp">
                                {{$product->Name}}
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
                                {{$product->Price}}
                            </h4>
                            <div class="div-button">
                                <a href="{{route('productid',['id' => $product->idProduct])}}"><button class="buy-button-product">ACHETER</button></a>
                            </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>



{{--<span><?php--}}
{{--      $db = \Illuminate\Support\Facades\DB::table('Product')->where('idProduct', 1)->first();--}}
{{--      echo $db->Name;--}}
{{--      ?></span>--}}

@include('includes.footer')
