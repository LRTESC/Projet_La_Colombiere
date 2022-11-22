@include('includes.head')
@include('includes.header')
<div class="container-fluid">
    <div class="row hero">
        <div class="hero_media">
            <div class="media-item">
                <div
                    style="background-image: url('{{asset('storage/pictures/Hero100_Phantom_Gold_Refurbished_desktop.webp')}}')">
                </div>
            </div>
        </div>
        <div class="hero_wrapper">
            <div class="hero_title">
                <h1 class="h1">
                    <span class="hero__titles__title">Phantom reconditionné</span>
                    <br>
                    <span class="hero__titles__subtitle">Cercle vertueux.</span>
                </h1>
            </div>
            <div class="hero_btn">
                <span>Découvrir</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="DevialetMania_wrapper">
            <div class="img_container">
                <img alt="Devialet media" src="{{asset('storage/pictures/KV_Diablo_Lifestyle_2000x2000.webp')}}"/>
            </div>
            <div class="D_mania_text">
                <h2>Devialet Mania.</h2>
                <p>La première enceinte stéréo portable haute-fidélité de Devialet, embarque notre obsession du son pur
                    dans tous vos moments de vie.</p>
                <h4>Découvrir ></h4>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
