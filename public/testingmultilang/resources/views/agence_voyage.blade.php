@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-agence-vyg.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-agence-vyg.css')}}" rel="stylesheet">
@endsection
@section('title',"Espace agences de voyages | Macir Vie")
@section('content')
@php
$image_big="agence-voyg-bg-big.png";
$image_medium="agence-voyg-bg-medium.png";
$image_small="agence-voyg-bg-small.png";
$image_mobile="agence-voyg-bg-small.png";
$titre1="Espace agences de voyages";
$paragraph1=" Macir Vie met à disposition des agences de voyages conventionnées, un espace dédié pour la gestion des
assurances de leurs clients. Cela leur permet de proposer des services et des séjours touristiques uniques,
complets, qui répondent aux attentes d'une clientèle de plus en plus exigeante.
Pour vous faciliter la conception de ces services et vous permettre d’offrir le meilleur à vos clients, Macir
Vie a développé
une plateforme en ligne, qui vous permet de gérer les contrats d’assurances voyages de tous vos clients.";

$titre2="2 bonnes raisons d’utiliser l’espace agences de voyages";
$titreBox1="UNE GESTION 100 % EN LIGNE";
$paragraphBox1="L’espace vous permet de gérer les dossiers et les contrats d’assurance voyage de vos clients en
quelques clics depuis votre bureau.";
$titreBox2="REMISES EXCEPTIONNELLES";
$paragraphBox2="Rejoignez l’espace consacré aux agences de voyages et bénéficiez de remises exceptionnelles sur les
tarifs des assurances voyages.";
if ($agenceVoyage!=null) {
$titre1 = $agenceVoyage->titre1;
$paragraph1 = $agenceVoyage->paragraph1;
$titre2 = $agenceVoyage->titre2;
$titreBox1 = $agenceVoyage->titreBox1;
$paragraphBox1 = $agenceVoyage->paragraphBox1;
$titreBox2 = $agenceVoyage->titreBox2;
$paragraphBox2 = $agenceVoyage->paragraphBox2;
if($agenceVoyage->image_big !=null) {
$image_big = $agenceVoyage->image_big;
}
if($agenceVoyage->image_medium !=null) {
$image_medium = $agenceVoyage->image_medium;
}
if($agenceVoyage->image_small !=null) {
$image_small = $agenceVoyage->image_small;
}
if($agenceVoyage->image_mobile !=null) {
$image_mobile = $agenceVoyage->image_mobile;
}
}

@endphp

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/agence-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/agence-mobile-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/agence-small-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/agence-medium-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/agence-mobile-'. App::getLocale().'.webp')}}" alt="" />
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

        <!--
        <div class="row float-right mt-4" id="button-day-night">
        <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
        </div> -->

        <div class="flex-wrapper">
            <!-- ////////////////////////////////////////////////////////////// -->

            <div class="flex-item">
                <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->

                <div class="col-12" id="quismnous" data-aos="fade-up">
                    <img class="underline" src="{{ asset('assets/img/Line-green.png')}}">

                    <h1 class="mt-2">{{ __('agence_vyg.ESPACE_AGNC_VYG') }}</h1>
                    <p class="col-12 mt-3">
                        {{ __('agence_vyg.ESPACE_AGNC_VYG_TEXT') }}
                    </p>

                </div>
            </div>

            <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="flex-item">
                <!-- Nos valeurs -->

                <div class="col-12" id="nosvaleurs" data-aos="fade-up">
                    <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">

                    <h2 class="mt-2">{{ __('agence_vyg.AVANTAGES') }}</h2>
                    <br>


                </div>


                <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


                <!-- Nos Valeurs Bouttons Big Size -->
                <div class="container">
                    <div class="row " id="raisons-buttons">
                        <div class="col-6" id="raisons-buttons-content" data-aos="fade-down">
                            <div class="carre-container">
                                <div class="row">
                                    <img class="row raisons" src="{{ asset('assets/img/GestionEnLigne.png')}}" alt="gestion en ligne">
                                </div> <br>
                                <div class="row">
                                    <h5>{{ __('agence_vyg.AVANTAGES_TITRE1') }}</h5> <br> <br>
                                    <p>
                                        {{ __('agence_vyg.AVANTAGES_TEXT1') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6" id="raisons-buttons-content" data-aos="fade-up">
                            <div class="carre-container">
                                <div class="row">
                                    <img class=" raisons" src="{{ asset('assets/img/remisesExceptionnelles.png')}}" alt="remises agences de voyage">
                                </div> <br>
                                <div class="row">
                                    <h5>{{ __('agence_vyg.AVANTAGES_TITRE2') }}</h5> <br> <br>
                                    <p>
                                        {{ __('agence_vyg.AVANTAGES_TEXT2') }}
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
                                    <img class="row raisons" src="{{ asset('assets/img/GestionEnLigne.png')}}" alt="gestion en ligne">
                                </div> <br>
                                <div class="row">
                                    <h5>{{ __('agence_vyg.AVANTAGES_TITRE1') }}</h5> <br> <br>
                                    <p>
                                        {{ __('agence_vyg.AVANTAGES_TEXT1') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" id="raisons-buttons-content" data-aos="fade-up">
                            <div class="carre-container">
                                <div class="row">
                                    <img class=" raisons" src="{{ asset('assets/img/remisesExceptionnelles.png')}}" alt="remises agences de voyage">
                                </div> <br>
                                <div class="row">
                                    <h5>{{ __('agence_vyg.AVANTAGES_TITRE2') }}</h5> <br> <br>
                                    <p>
                                        {{ __('agence_vyg.AVANTAGES_TEXT2') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nos Valeurs Bouttons Size END -->
            </div>

            <!-- ////////////////////////////////////////////////////////////// -->


            <div class="flex-item">
                <div class="row" id="Service-part-decouvrir-plus" data-aos="fade-up">
                    <a href="{{ route(app()->getLocale().'-contact-reseau') }}" class="btn" id="decouvrir-plus"><span><span id="text"> {{__('agence_vyg.ACCESS_PAGE')}} &nbsp <i class="fas fa-caret-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>


    </div>
</div>


<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->

@endsection
@section('js')
<script src="{{ asset('assets/js/body-agence-vyg.js')}}"></script>

@endsection
