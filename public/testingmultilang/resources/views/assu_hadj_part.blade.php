@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-hadj-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-hadj-part.css')}}" rel="stylesheet">

@endsection
@section('title',"Assurance Hadj & Omra | Macir Vie")
@section('content')
@php
$image_big="assu-hadj-part-bg-big.png";
$image_medium="assu-hadj-part-bg-medium.png";
$image_small="assu-hadj-part-bg-small.png";
$image_mobile="assu-hadj-part-bg.png";
$titre_image="MyM Hadj & Omra-01.png";
$paragraph1="MyM Hadj et Omra vous garantit une prise en charge et une assistance durant votre pèlerinage vers les lieux Saints en cas d’accidents ou de maladies nécessitant une hospitalisation ou des soins.";
$titre2="Pourquoi souscrire ?";
$paragraph2="Avec l’assurance Hadj et Omra, Macir Vie vous accompagne durant votre pèlerinage et vous garantit la
prise en charge.";
$image="Arcade.svg";
$titre3="Les avantages de l’assurance Hadj & Omra de Macir Vie";
$titreBox1="1ère en Algérie";
$titreBox2="Assistance 24h/24 et 7j/7";
$paragraphBox1="Macir Vie est la première compagnie à avoir proposé une assurance spécifique Hadj & Omra sur le marché algérien.";
$paragraphBox2="Pour que votre pèlerinage rime avec sérénité, nos équipes sont à votre disposition afin de vous assister et répondre à vos demandes 24h/24 et 7J/7.";

$paragraph3="Ce contrat d’assurance prend en charge les risques particuliers auxquels un pèlerin peut être exposé
lors de son pèlerinage et fournit une assistance adaptée à chaque imprévu qui risque de lui arriver. Ceci permettra
à l’assuré de se consacrer entièrement à son Hadj et de s’épanouir tout au long de son séjour.";
$sous_paragraph11="Des frais médicaux suite à une maladie ou une lésion survenue durant le séjour de l’assuré lors
du pèlerinage.";
$sous_paragraph12="Du transport ou rapatriement en cas de maladie ou lésion.";
$sous_paragraph13="Des soins dentaires d’urgence.";
$sous_paragraph14="Du transport ou rapatriement en cas de décès.";
$sous_paragraph15="De la transmission de messages urgents.";
$sous_paragraph16="De la perte du passeport, de documents de voyage et/ou du billet d’avion.";


if ($hadjOmra!=null) {
$paragraph1 = $hadjOmra->paragraph1;
$titre2 = $hadjOmra->titre2;
$paragraph2 = $hadjOmra->paragraph2;
$titre3 = $hadjOmra->titre3;
$paragraph3 = $hadjOmra->paragraph3;
$sous_paragraph11 = $hadjOmra->sous_paragraph11;
$sous_paragraph12 = $hadjOmra->sous_paragraph12;
$sous_paragraph13 = $hadjOmra->sous_paragraph13;
$sous_paragraph14 = $hadjOmra->sous_paragraph14;
$sous_paragraph15 = $hadjOmra->sous_paragraph15;
$sous_paragraph16 = $hadjOmra->sous_paragraph16;

if(
$hadjOmra->titre_image !=null
){
$titre_image = $hadjOmra->titre_image;
}
if(
$hadjOmra->image !=null
){
$image = $hadjOmra->image;
}
if($hadjOmra->image_big !=null) {
$image_big = $hadjOmra->image_big;
}
if($hadjOmra->image_medium !=null) {
$image_medium = $hadjOmra->image_medium;
}
if($hadjOmra->image_small !=null) {
$image_small = $hadjOmra->image_small;
}
if($hadjOmra->image_mobile !=null) {
$image_mobile = $hadjOmra->image_mobile;
}
}
@endphp

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/pelerinage-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/pelerinage-mobile-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/pelerinage-small-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/pelerinage-medium-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/pelerinage-mobile-'. App::getLocale().'.webp')}}" alt="" />
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
        <div class="flex-item">
            <div class="container">

                <!-- <div class="row float-right mt-4" id="button-day-night">
            <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
            </div> -->

                <!-- ////////////////////////////////////////////////////////////// -->

                <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->

                <div class="col-12" id="quismnous" data-aos="fade-up">
                    <img class="underline" src="{{ asset('assets/img/Line-red.png')}}">
                    <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="mym hadj et omra">
                    <h1 style="font-size: 1px; visibility: hidden;">MyM Hadj & Omra</h1>
                    <p class="col-12">
                        {{ __('assu_hadj_part.HADJ_MyM_TEXT') }}
                    </p>

                </div>

            </div>
        </div>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="flex-item container">
            <!-- Partenaire -->

            <div class="row" id="partenaires">

                <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
                    <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                    <h2 class="pt-2">{{ __('assu_hadj_part.POURQUOI_SOUSCRIRE') }}</h2>
                    <!-- <h3>Assistance à la famille</h3> -->
                    <p> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT1') }}</p>
                    <ul>
                    <li>
                        {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT2') }}
                    </li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT3') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT4') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT5') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT6') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT7') }}</li>
                    </ul>
                    <p>{{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT8') }}
                    </p>
                </div>

                <div class="col-6" id="valeurs" data-aos="fade-right">
                    <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="pèlerinage hadj et omra">
                </div>

            </div>

            <!-- Partenaires END -->


            <!-- Partenaire small -->
            <div class="row" id="partenaires-small">

                <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
                    <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                    <h2>{{ __('assu_hadj_part.POURQUOI_SOUSCRIRE') }}</h2>
                    <!-- <h3>Assistance à la famille</h3> -->
                    <p> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT1') }}</p>
                    <li>
                        {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT2') }}
                    </li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT3') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT4') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT5') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT6') }}</li>
                    <li> {{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT7') }}</li>
                    <p>{{ __('assu_hadj_part.POURQUOI_SOUSCRIRE_TEXT8') }}
                    </p>
                </div>

            </div>

            <!-- END Partenaires Small -->
        </div>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="flex-item">
            <!-- Nos valeurs -->

            <div class="col-12" id="nosvaleurs" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">

                <h2 class="mt-2">{{ __('assu_hadj_part.AVANTAGES') }}</h2>



            </div>

            <!-- Nos Valeurs Bouttons Big Size -->
            <div class="container">
                <div class="row " id="raisons-buttons">
                    <div class="col-6" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container" id="carre-cont-left">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/protectionfinanciere.png')}}" alt="Protection financière">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_hadj_part.AVANTAGES_TITRE1') }} </h5>
                                <p>
                                    {{ __('assu_hadj_part.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container" id="carre-cont-right">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="Souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_hadj_part.AVANTAGES_TITRE2') }}</h5> <br> <br>
                                <p>
                                    {{ __('assu_hadj_part.AVANTAGES_TEXT2') }}
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
                        <div class="carre-container carre-cont-small">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/protectionfinanciere.png')}}" alt="Protection financière">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_hadj_part.AVANTAGES_TITRE1') }} </h5>
                                <p>
                                    {{ __('assu_hadj_part.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container carre-cont-small">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="Souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_hadj_part.AVANTAGES_TITRE2') }}</h5>
                                <p>
                                    {{ __('assu_hadj_part.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nos Valeurs Bouttons Size END -->
        </div>
        <br>
        <div class="flex-item position-relative" style="z-index: 1000;">
            <div class="row flex-column justify-content-md-center align-items-md-center mt-0 mb-5 sous-simul col-12">
                <div id="submit-news-letter-bg">
                    <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="submit" class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span><span id="text" class="justify-content-center">{{ __('welcome.CONDITIONS')}} &nbsp; <i class="fas fa-caret-down"></i></span></span></button>
                    <div class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);" aria-labelledby="dropdownMenuButton">
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Hadj et Omra-FR.pdf') }}">Français</a>
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Hadj et Omra-AR.pdf') }}">عربية</a>
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

    <script src="{{ asset('assets/js/body-assu-hadj-part.js')}}"></script>
    @endsection
