@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-crdemp-pro.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-crdemp-pro.css')}}" rel="stylesheet">

@endsection
@section('title',"Assurance crédit emprunteur pour professionnels | Macir Vie")
@section('image_article', asset('/storage/images/assu-credit-pro-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="assu-creditemp-pro-bg-big.png";
$image_medium="assu-creditemp-pro-bg-medium.png";
$image_small="assu-creditemp-pro-bg-small.png";
$image_mobile="assu-creditemp-pro-bg.png";

$titre_image="MyM_Credit-01.png";
$paragraph1="L’assurance Crédit-Emprunteur est une assurance indispensable lors d’un prêt bancaire pour sécuriser et garantir votre remboursement, notamment les crédits immobiliers, d’investissement ou d’exploitation. En cas de décès ou d’invalidité, l’avenir de votre entreprise reste protégé avec Macir Vie qui s’occupe de rembourser votre crédit auprès de votre banque.";
$titre2="Pourquoi souscrire ?";
$paragraph2="Que vous soyez chef d’entreprise, d’une profession libérale, commerçant ou artisan, une assurance Crédit-Emprunteur vous sera demandée lors de la contraction d’un crédit bancaire qui rentre dans le cadre de votre activité professionnelle (immobilier, d’investissement ou d’exploitation). Celle-ci pourra prévoir le remboursement de vos prêts si vous n’êtes plus en mesure d’assumer votre crédit en cas de décès ou d’invalidité. Cette assurance peut être aussi souscrite lors d’un prêt que vous aurez accordé à vos collaborateurs.";
$image="Stylo.svg";
$titre3="Les avantages de l’assurance crédit emprunteur de Macir Vie";
$titreBox1="Souscription facile et rapide";
$paragraphBox1="Afin de vous faire gagner du temps, Macir Vie vous assure une souscription simple et rapide à votre assurance crédit emprunteur.";
$titreBox2="Valable auprès de toutes les banques";
$paragraphBox2="Quel que soit le type de crédit et quelle que soit la banque auprès de laquelle vous souscrivez votre emprunt, l’assurance MyM Crédit vous accompagne.";



if ($creditPro!=null) {
$paragraph1 = $creditPro->paragraph1;
$titre2 = $creditPro->titre2;
$paragraph2 = $creditPro->paragraph2;
$titre3 = $creditPro->titre3;
$titreBox1 = $creditPro->titreBox1;
$paragraphBox1 = $creditPro->paragraphBox1;
$titreBox2 = $creditPro->titreBox2;
$paragraphBox2 = $creditPro->paragraphBox2;
if($creditPro->image_medium !=null) {
$image_medium = $creditPro->image_medium;
}
if($creditPro->image_small !=null) {
$image_small = $creditPro->image_small;
}
if($creditPro->image_mobile !=null) {
$image_mobile = $creditPro->image_mobile;
}
if(
$creditPro->titre_image !=null
){
$titre_image = $creditPro->titre_image;
}
if(
$creditPro->image !=null
){
$image = $creditPro->image;
}
}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-credit-pro-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-credit-pro-mobile-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-credit-pro-small-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-credit-pro-medium-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/assu-credit-pro-mobile-'. App::getLocale().'.webp')}}" alt="" />
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

                <!-- ////////////////////////////////////////////////////////////// -->

                <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->

                <div class="col-12" id="quismnous" data-aos="fade-up">
                    <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">

                    <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="mym crédit">
                    <h1 style="visibility: hidden;">MyM Credit</h1>
                    <p class="col-12" style="margin-top: -3em;">
                        {{ __('assu_credit_pro.CREDIT_MyM_TEXT') }}
                    </p>
                    <div class="row d-flex justify-content-center">
                        <div class="" id="Service-part-decouvrir-plus" data-aos="fade-up">
                            <a href="{{ route(app()->getLocale().'-contact-reseau')}}" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('welcome.SAVOIR_PLUS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>


        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


        <div class="flex-item">
            <!-- Partenaire -->
            <div class="container">
                <div class="row" id="partenaires">

                    <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
                        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
                        <h2>{{ __('assu_credit_pro.POURQUOI_SOUSCRIRE') }}</h2>
                        <p>{{ __('assu_credit_pro.POURQUOI_SOUSCRIRE_TEXT') }}</p>
                    </div>

                    <div class="col-6" id="valeurs" data-aos="fade-right">
                        <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="crédit banque">
                    </div>

                </div>


            </div>
            <!-- Partenaires END -->


            <!-- Partenaire small -->
            <div class="container">
                <div class="row" id="partenaires-small">

                    <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
                        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
                        <h2>{{ __('assu_credit_pro.POURQUOI_SOUSCRIRE') }}</h2>
                        <p>{{ __('assu_credit_pro.POURQUOI_SOUSCRIRE_TEXT') }}</p>
                    </div>

                </div>
            </div>

            <!-- END Partenaires Small -->
            <br>
        </div>

        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="flex-item">
            <!-- Nos valeurs -->

            <div class="col-12" id="nosvaleurs" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">

                <h2 class="mt-2">{{ __('assu_credit_pro.AVANTAGES') }}</h2> <br>
                <br>


            </div>


            <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


            <!-- Nos Valeurs Bouttons Big Size -->
            <div class="container">
            @if(Request()->route()->getPrefix() === "/fr")
                <div class="row " id="raisons-buttons">
                    <div class="col-6" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container" id="carre-cont-left-fr">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE1') }}</h5> <br> <br>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container" id="carre-cont-right-fr">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/vousEviteTransmissionDettes.png')}}" alt="remboursement des dettes">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE2') }}</h5>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif (Request()->route()->getPrefix() === "/ar")
                <div class="row " id="raisons-buttons">
                    <div class="col-6" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container" id="carre-cont-left-ar">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE1') }}</h5> <br> <br>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container" id="carre-cont-right-ar">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/vousEviteTransmissionDettes.png')}}" alt="remboursement des dettes">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE2') }}</h5>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
            </div>
            <!-- Nos Valeurs Bouttons Big Size END -->
            <!-- ////////////////////////////////////////////////////////////// -->

            <!-- Nos Valeurs Bouttons Small Size -->
            <div class="container">
                <div class="row " id="raisons-buttons-small">
                    <div class="col-12" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container carre-cont-small">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE1') }}</h5>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container carre-cont-small">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/vousEviteTransmissionDettes.png')}}" alt="remboursement des dettes">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_pro.AVANTAGES_TITRE2') }}</h5>
                                <p>
                                    {{ __('assu_credit_pro.AVANTAGES_TEXT2') }}
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
            <div id= "conditions_general" class="row flex-column justify-content-md-center align-items-md-center mt-0 mb-5 sous-simul col-12">
                <div id="submit-news-letter-bg">
                    <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="submit" class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span><span id="text" class="justify-content-center">{{ __('welcome.CONDITIONS')}} &nbsp; <i class="fas fa-caret-down"></i></span></span></button>
                    <div class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);" aria-labelledby="dropdownMenuButton">
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Credit-FR.pdf') }}">Français</a>
                        <a class="text-white dropdown-item" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Credit-AR.pdf') }}">عربية</a>
                    </div>
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
<script src="{{ asset('assets/js/body-assu-crdemp-pro.js')}}"></script>

@endsection
