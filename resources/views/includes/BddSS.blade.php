@include('includes.head')
@include('includes.header')

<h1>{{$id}}</h1>


    </div>
    <div class="item3">
        <section class='FlexContainer'>

            <div><h1>Phantom I 103 dB - Stereo </h1></div>
            <div><h5>vivez une expérience immersive hors du commun.</h5></div>
            <div class="mono-stereo"><button>MONO</button><button>STEREO</button></div>
            <div>106 dB SPL. 16Hz – 25kHz. 2 x 500 Watts RMS.</div>


            <div><button class="panier" >Ajouter au Panier</button></div>
        </section>
    </div>
</div>


@include('includes.footer')

<span>{{\Illuminate\Support\Facades\DB::table('Product')->where('idProduct', 1)->first()->Name}}</span>



