@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-acc-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-acc-part.css')}}" rel="stylesheet">
@endsection
@section('title',"Assurance garantie des accidents de la vie | Macir Vie")
@section('content')
@php

$image_big="assu-acc-part-bg-big.png";
$image_medium="assu-acc-part-bg-medium.png";
$image_small="assu-acc-part-bg-small.png";
$image_mobile="assu-acc-part-bg.png";

$titre_image="MyM_Protection_Accidents-01.png";
$paragraph1="MyM Protection Accidents vous permet, à vous et vos proches, d’être indemnisés en cas de décès ou d'accidents corporels survenus au cours de votre vie privée ou professionnelle.";
$titre1="Pourquoi souscrire ?";
$paragraph2="Une couverture internationale : Avec l’Assurance MyM Protection de Macir Vie, vous êtes couverts partout dans le monde, pour des séjours pouvant aller jusqu’à 60 jours. Un niveau d’indemnisation important : L’Assurance MyM Protection Accidents de Macir Vie vous offre une indemnisation pouvant atteindre 10 000 000 DA en cas de décès et 1 000 000 DA pour tous vos frais médicaux, pharmaceutiques et hospitaliers.";
$image="Comment ca marche.svg";
$titre2="Les avantages de l’assurance Garantie des Accidents de la Vie de Macir Vie";

$titreBox1="Souscription en ligne";
$paragraphBox1="Obtenez votre assurance en quelques clics sur votre espace MyM avec un paiement par carte CIB ou EDDAHABIA.";
$titreBox2="Assistance 24h/24 et 7j/7";
$paragraphBox2="Nos équipes sont à votre disposition afin de vous assister et répondre à vos demandes 24h/24 et 7J/7.";
$titreBox3="Protège aussi votre famille:";
$paragraphBox3="Macir Vie couvre également votre conjoint.e et/ou vos enfants contre les conséquences d’un accident corporel.";


if ($proctectionAccidents!=null) {
$paragraph1 = $proctectionAccidents->paragraph1;
$titre1 = $proctectionAccidents->titre1;
$paragraph2 = $proctectionAccidents->paragraph2;
$titre2 = $proctectionAccidents->titre2;
$titreBox1 = $proctectionAccidents->titreBox1;
$paragraphBox1 = $proctectionAccidents->paragraphBox1;
$titreBox2 = $proctectionAccidents->titreBox2;
$paragraphBox2 = $proctectionAccidents->paragraphBox2;


if(
$proctectionAccidents->titre_image !=null
){
$titre_image = $proctectionAccidents->titre_image;
}
if(
$proctectionAccidents->image !=null
){
$image = $proctectionAccidents->image;
}
if($proctectionAccidents->image_big !=null) {
$image_big = $proctectionAccidents->image_big;
}
if($proctectionAccidents->image_medium !=null) {
$image_medium = $proctectionAccidents->image_medium;
}
if($proctectionAccidents->image_small !=null) {
$image_small = $proctectionAccidents->image_small;
}
if($proctectionAccidents->image_mobile !=null) {
$image_mobile = $proctectionAccidents->image_mobile;
}
}
@endphp

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-acc-part-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-acc-part-mobile-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-acc-part-small-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-acc-part-medium-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/assu-acc-part-mobile-'. App::getLocale().'.webp')}}" alt="" />
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
    <div class="flex-wrapper">
        <div class="flex-item container">
            <!-- ////////////////////////////////////////////////////////////// -->

            <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->

            <div class="col-12 mt-3" id="quismnous" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">
                <img class="col-12 logo-tbb mt-2" src="{{ asset('storage/images/'.$titre_image)}}" alt="Mym protection accidents">
                <h1 style="visibility: hidden;">MyM Protection Accidents</h1>
                <p class="col-12" style="margin-top: -3em;">
                    {{ __('assu_accident_part.PROTECTION_ACCIDENT_TEXT') }}
                </p>
            </div>


            <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
        </div>
        <div class="flex-item">
            <!-- Partenaire -->
            <div class="container">

                <div class="row" id="partenaires">
                    <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
                        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
                        <h2>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE') }}</h2>
                        <p>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE_TEXT1') }}</p>
                        <p>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE_TEXT2') }}</p>
                    </div>

                    <div class="col-6" id="valeurs" data-aos="fade-right">
                        <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="coeur santé">
                    </div>
                </div>
            </div>
            <!-- Partenaires END -->

            <!-- Partenaire small -->
            <div class="container">
                <div class="row" id="partenaires-small">

                    <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
                        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
                        <h2>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE') }}</h2>
                        <p>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE_TEXT1') }}</p>
                        <p>{{ __('assu_accident_part.POURQUOI_SOUSCRIRE_TEXT2') }}</p>
                    </div>

                </div>
                <br>
            </div>
            <!-- END Partenaires Small -->
        </div>
        <div class="flex-item">
            <!-- Nos valeurs -->
            <div class="col-12 d-flex align-items-center justify-content-center flex-column " id="nosvaleurs" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">
                <h2 class="m-0 mt-2 w-75"> {{ __('assu_accident_part.AVANTAGES') }}</h2> <br>

            </div>
            <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- Nos Valeurs Bouttons Big Size -->
            <div class="container">
                <div class="row " id="raisons-buttons">
                    <div class="col-4" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/sous-en-ligne.png')}}" alt="souscription en ligne">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE1') }} </h5> <br> <br>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/24-24.png')}}" alt="Assistance qutidienne">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE2') }} </h5> <br> <br>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4" id="raisons-buttons-content" data-aos="fade-up">
                        <div class="carre-container">
                            <div class="row">
                                <img class=" raisons" src="{{ asset('assets/img/ChancelLeries-europeennes.png')}}" alt="Chancelleries européennes">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE3') }}</h5>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT3') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nos Valeurs Bouttons Big Size END -->
            <!-- ////////////////////////////////////////////////////////////// -->
            <!-- Nos Valeurs Bouttons Small Size -->
            <div class="container">
                <div class="row " id="raisons-buttons-small">
                    <div class="col-12" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/sous-en-ligne.png')}}" alt="souscription en ligne">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE1') }} </h5> <br> <br>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/24-24.png')}}" alt="Assistance qutidienne">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE2') }} </h5> <br> <br>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-12" id="raisons-buttons-content" data-aos="fade-up">
                        <div class="carre-container">
                            <div class="row">
                                <img class=" raisons" src="{{ asset('assets/img/ChancelLeries-europeennes.png')}}" alt="Chancelleries européennes">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_accident_part.AVANTAGES_TITRE3') }} </h5> <br> <br>
                                <p>
                                    {{ __('assu_accident_part.AVANTAGES_TEXT3') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nos Valeurs Bouttons Size END -->
            <!-- ////////////////////////////////////////////////////////////// -->
        </div>

        <div class="flex-item position-relative" style="z-index: 1000;">
            <div class="row flex-column justify-content-md-center align-items-md-center mt-0 mb-5 sous-simul col-lg-8 col-12">
                <div id="submit-news-letter-bg">
                    <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="submit" class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span><span id="text" class="justify-content-center">{{ __('welcome.CONDITIONS')}} &nbsp; <i class="fas fa-caret-down"></i></span></span></button>
                    <div class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);" aria-labelledby="dropdownMenuButton">
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Protection Accident-FR.pdf') }}">Français</a>
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Protection Accident-AR.pdf') }}">عربية</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-item">
            <div class="container">
                <div class="row justify-content-md-center mt-0 mb-5 sous-simul col-8">

                    <div id="Service-pro-decouvrir-plus">
                        <a href="/mym/#/simulation-individuelle-accident" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('welcome.SIMULATION')}} &nbsp <i class="fas fa-caret-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Separator -->
<div id="separator">
</div>
@endsection
@section('js')

<script src="{{ asset('assets/js/body-assu-acc-part.js')}}"></script>
@endsection
