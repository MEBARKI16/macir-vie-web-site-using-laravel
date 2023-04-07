@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-apropos.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-apropos.css')}}" rel="stylesheet">
@endsection
@section('title',"Compagnie d'assurance de personnes | Macir Vie")
@section('image_article', asset('/storage/images/apropos-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="a-propos-bg-big.png";
$image_medium="a-propos-bg-medium.png";
$image_small="a-propos-bg-small.png";
$image_mobile="a-propos-bg.png";
$smallImage1="fiabilite.png";
$smallImage2="proximite.png";
$smallImage3="innovation.png";
$titre1="Qui sommes-nous ?";
$paragraph1="Macir Vie est la première compagnie privée spécialisée dans les assurances de personnes en
Algérie. Macir Vie a été fondée le 11 août 2011, suite à la séparation des assurances de personnes et des assurances
dommages. Grâce aux compétences d’une équipe chevronnée, la compagnie a bénéficié d’une connaissance
approfondie du contexte social et économique algérien. C’est ainsi que Macir Vie a pu apporter une réelle
valeur ajoutée sur le marché des assurances, en concevant des produits à la hauteur des attentes et besoins
spécifiques de ses assurés, qu’ils soient professionnels
ou particuliers. Grâce à ces forces et à la volonté de l’ensemble de l’équipe, Macir Vie a pu relever de
multiples défis, assurer une croissance constante, jusqu’à se hisser à la première place des compagnies
d’assurance privées.";
$titre2="Nos valeurs";
$paragraph2="Afin de satisfaire nos clients quotidiennement Macir Vie fonde ses actions sur trois valeurs
cardinales à savoir :";
$paragraph3="À travers notre spécialisation dans le domaine des assurances de personnes et notre solide expérience, nous vous garantissons une fiabilité en toutes circonstances. Pour ce faire, notre compagnie met un point d’honneur à tenir ses engagements envers ses clients, afin de répondre à toutes les problématiques, notamment en termes de prise en charge des sinistres et de rapidité de remboursement.";
$paragraph4="Nous plaçons la proximité avec nos clients au cœur de nos préoccupations. Nos équipes veillent à être accessibles et disponibles pour prendre en charge vos requêtes dans les meilleures conditions. Avec un personnel dévoué, à l’écoute constante et à travers un respect sans faille de ses clients, notre compagnie vous est entièrement dédiée.";
$paragraph5="L’innovation est notre maître-mot ! Nous retrouvons cette valeur à travers la volonté de concrétiser la transformation digitale des services d’assurances, mais également en proposant des produits inspirés par nos clients, pour répondre à leurs besoins. C’est pourquoi nous attachons une importance capitale au développement technologique, afin d’assurer une présence sur toutes les plateformes.";
$titre3="Notre Vision";
$paragraph6="“Devenir une référence dans l’innovation dans le secteur des assurances en Algérie.”";
$titre4="Nos missions";
$paragraph7=" Contribuer au développement du secteur
des assurances en Algérie.Être présent pour vous et votre entreprise dans
tous les moments difficiles que la vie peut réserver.Développer des services innovants pour
répondre au mieux à vos besoins.";
$titre5="Nos partenaires";
$paragraph8="Macir Vie s’entoure au quotidien, de partenaires solides, de renommée internationale pour vous offrir
la meilleure couverture et pour vous accompagner au mieux dans vos futurs projets.";

if($apropos!=null){
$titre1=$apropos->titre1;
$paragraph1=$apropos->paragraph1;
$titre2=$apropos->titre2;
$paragraph2=$apropos->paragraph2;
$paragraph3=$apropos->paragraph3;
$paragraph4=$apropos->paragraph4;
$paragraph5=$apropos->paragraph5;
$titre3=$apropos->titre3;
$paragraph6=$apropos->paragraph6;
$titre4=$apropos->titre4;
$paragraph7=$apropos->paragraph7;
$titre5=$apropos->titre5;
$paragraph8=$apropos->paragraph8;



}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/apropos-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/apropos-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/apropos-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/apropos-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/apropos-mobile-'. App::getLocale().'.webp')}}" alt=""/>
    </picture>
    </div>
</header>

@include('layouts/modals')

<!-- ////////////////////////////////////////////////////////////// -->

<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->

<!-- Body of landing page -->

<div class="landing-body">
    <div class="container">

        <!-- <div class="row float-right mt-4" id="button-day-night">
    <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
    </div> -->

        <!-- ////////////////////////////////////////////////////////////// -->

        <!-- Qui sommes nous -->

        <div class="col-12 section" id="quismnous" data-aos="fade-up">
            <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">

            <h1 class="mt-1"> {{ __('apropos.QUI_SOMME_NOUS') }}</h1>
            <br>
            <p class="col-12">{{ __('apropos.QUI_SOMME_NOUS_TEXT') }}</p>
        </div>
        <div class="flex-item position-relative" style="z-index: 1000;">
            <div id="submit-news-letter-bg">
            <a href="#" data-toggle="modal" data-target="#modalEbook">
                <button class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span>
                <span id="text" class="justify-content-center">{{ __('navbar.DISCOVER_US') }} &nbsp; <i class="fas fa-caret-right"></i></span></span></button>
            </a>
            </div>
        </div>

        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


        <!-- Nos valeurs -->

        <div class="col-12 section" id="nosvaleurs" data-aos="fade-up">
            <img class="underline" src="{{ asset('assets/img/Line-red.png')}}">

            <h2 class="mt-2"> {{ __('apropos.NOS_VALUERS') }} </h2>
            <p class="col-12 mt-1">
                {{ __('apropos.NOS_VALUERS_TEXT') }}
            </p>
            <br>


        </div>


        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


        <!-- Nos Valeurs Bouttons Big Size -->

        <div class="row" id="souscription-buttons">
            <div class="col-4" id="souscription-buttons-content" data-aos="fade-down">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/fiabilite-'. App::getLocale().'.png')}}" alt="Fiabilité">
                </div>
                <div class="row">
                    <p>{{ __('apropos.FIABILITE_TEXT') }}</p>
                </div>
            </div>

            <div class="col-4" id="souscription-buttons-content" data-aos="fade-left">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/proximite-'. App::getLocale().'.png')}}" alt="Proximité">
                </div>
                <div class="row">
                    <p>{{ __('apropos.PROXIMITE_TEXT') }}</p>
                </div>
            </div>



            <div class="col-4" id="souscription-buttons-content" data-aos="fade-up">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/innovation-'. App::getLocale().'.png')}}" alt="Innovation">
                </div>
                <div class="row">
                    <p>{{ __('apropos.INNOVATION_TEXT') }}</p>
                </div>
            </div>
        </div>

        <!-- Nos Valeurs Bouttons Big Size END -->
        <!-- ////////////////////////////////////////////////////////////// -->

        <!-- Nos Valeurs Bouttons Small Size -->
        <div id="souscription-buttons-small">
            <div id="souscription-buttons-content">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/fiabilite-'. App::getLocale().'.png')}}" alt="Fiabilité">
                </div>
                <div class="row">
                    <p>{{ __('apropos.FIABILITE_TEXT') }}</p>
                </div>
            </div>
            <br>
            <div id="souscription-buttons-content">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/proximite-'. App::getLocale().'.png')}}" alt="Proximité">
                </div>
                <div class="row">
                    <p>{{ __('apropos.PROXIMITE_TEXT') }}</p>
                </div>
            </div>

            <br>

            <div id="souscription-buttons-content">
                <div class="row">
                    <img class="row souscription" src="{{ asset('storage/images/innovation-'. App::getLocale().'.png')}}" alt="Innovation">
                </div>
                <div class="row">
                    <p>{{ __('apropos.INNOVATION_TEXT') }}</p>
                </div>
            </div>
        </div> <br>
        <!-- Nos Valeurs Bouttons Size END -->

        <!-- ////////////////////////////////////////////////////////////// -->



        <!-- Vision et missions -->


        <div class="row" id="vision" data-aos="fade-up">
            <div class="" id="text-vision">
                <img class="row underline" src="{{ asset('assets/img/Line-yellow.png')}}">
                <h2>{{ __('apropos.NOTRE_VISION') }}</h2>
                <div class="container">
                    <p>
                    {{ __('apropos.NOTRE_VISION_TEXT') }}
                    </p>
                </div>
            </div>

            <div class="mt-3" id="text-vision">
                <img class="row underline" src="{{ asset('assets/img/Line-yellow.png')}}">
                <h2> {{ __('apropos.NOS_MISSION') }}</h2>
                <div class="container">
                    <ul style="color: white;">
                        <li>
                            <p>{{ __('apropos.NOS_MISSION_TEXT1') }}</p>
                        </li>
                        <li>
                            <p>{{ __('apropos.NOS_MISSION_TEXT2') }}</p>
                        </li>
                        <li>
                            <p>{{ __('apropos.NOS_MISSION_TEXT3') }}</p>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

        <!-- Vision et missions END -->

        <!-- Partenaire -->

        <div class="row" style="display: flex; justify-content: space-between; align-items: center" id="partenaires">

            <div class="col-4 macir-partners" id="valeurs" data-aos="fade-right">
                <!-- <img class="row valeurs" src="{{ asset('assets/img/macir.svg')}}"> -->
            </div>

            <div class="col-8" id="text-prq-choisir" data-aos="fade-left">
                <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                <div class="animation-partners" id="animate-logos">
                    <h2>{{ __('apropos.NOS_PARTENAIRES') }}</h2>
                    <p>
                        {{ __('apropos.NOS_PARTENAIRES_TEXT') }}
                    </p>
                </div>
            </div>

        </div>

        <div class="row" id="partenaires-small">
            <div class="" id="valeurs" style="z-index:4;">
                <img class="row valeurs" src="{{ asset('assets/img/macir-mob.png')}}">
            </div>
            <br>
            <div id="text-prq-choisir">
                <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                <h2>{{ __('apropos.NOS_PARTENAIRES') }}</h2>

                <div class="container">
                    <p>
                    {{ __('apropos.NOS_PARTENAIRES_TEXT') }}
                    </p>
                </div>
            </div>

        </div>

        <!-- Partenaires END -->

        <!-- partners logo -->
        <div class="customer-logos">
        <div class="slide"><img id="mapfre" src="{{ asset('assets/img/Logo Mapfre-01.png')}}" onclick="addMapfre(`{{ __('apropos.Mapfre')}}`, `{{ __('apropos.Mapfre_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo Hannover-01.png')}}" onclick="addHannover(`{{ __('apropos.Hannover')}}`, `{{ __('apropos.Hannover_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo Societe Generale-01.png')}}" onclick="addSg(`{{ __('apropos.Sg')}}`, `{{ __('apropos.Sg_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo Scoor-01.png')}}" onclick="addScoor(`{{ __('apropos.Scoor')}}`, `{{ __('apropos.Scoor_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo CCR-01.png')}}" onclick="addCcr(`{{ __('apropos.Ccr')}}`, `{{ __('apropos.Ccr_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/LogoCBI-01.png')}}" onclick="addCbi(`{{ __('apropos.Cbi')}}`, `{{ __('apropos.Cbi_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo AfricaRe-01.png')}}" onclick="addAfricaRe(`{{ __('apropos.AfricaRe')}}`, `{{ __('apropos.AfricaRe_TEXT')}}`)"></div>
            <div class="slide"><img src="{{ asset('assets/img/Logo Generali-01.png')}}" onclick="addGenerali(`{{ __('apropos.Generali')}}`, `{{ __('apropos.Generali_TEXT')}}`)"></div>

        </div>
        <!-- End partners logo -->

    </div>
</div>

@endsection
@section('js')
<script>
    function stringToBool(string) {
            if (string === "1") return true;
            else if (string === "0") return false;
        };
    $(document).ready(function(){
        $('.customer-logos').slick({
            rtl: stringToBool("{{App::isLocale('ar') ? true : false}}"),
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
            }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
            }]
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<!-- <script src="{{ asset('assets/js/caroussel-apropos.js')}}"></script> -->
<script src="{{ asset('assets/js/body-apropos.js')}}"></script>
@endsection
