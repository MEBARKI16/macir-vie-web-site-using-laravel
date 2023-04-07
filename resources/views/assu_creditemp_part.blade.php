@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-crdemp-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-crdemp-part.css')}}" rel="stylesheet">
@endsection
@section('title',"Assurance crédit emprunteur pour particuliers | Macir Vie")
@section('image_article', asset('/storage/images/assu-credit-part-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="assu-creditemp-part-bg-big.png";
$image_medium="assu-creditemp-part-bg-medium.png";
$image_small="assu-creditemp-part-bg-small.png";
$image_mobile="assu-creditemp-part-bg.png";
$titre_image="MyM_Credit-01.png";
$paragraph1="Lorsque vous demandez un crédit bancaire, votre banque vous exige une garantie d’assurance qui couvre
votre emprunt en cas d’invalidité ou de décès.
L’assurance crédit emprunteur est une assurance obligatoire, qui prend en charge la totalité ou une partie des
échéances de remboursement d’un crédit en cas de survenance de certains événements (décès, invalidité absolue et
définitive).";
$titre2="Pourquoi souscrire ?";
$paragraph2="Macir Vie garantit le remboursement de la créance restante due, en cas de décès ou d’incapacité absolue
définitive de l’assuré au moment de l’accident. Par ce biais, Macir Vie désintéresse le banquier et le bien devient
la propriété des ayants droit. Macir Vie vous évite, ainsi, de perdre le bien financé et garantit le droit de
propriété à votre famille qui sera ainsi protégée.";
$image="Maison.svg";
$titre3="Les avantages de l’assurance crédit emprunteur «particuliers» de Macir Vie";

$titreBox1="Une protection financière pour votre famille";
$paragraphBox1="Macir Vie assure votre emprunt en cas de décès, d’invalidité absolue et définitive et vous évite la transmission de vos dettes à votre famille, en lui assurant la propriété du bien.";
$titreBox2="Souscription facile et rapide";
$paragraphBox2="Afin de vous faire gagner du temps, Macir Vie vous assure une souscription simple et rapide à votre assurance crédit emprunteur, à travers la prise en charge par un conseiller client.";
$titreBox3="Valable auprès de toutes les banques";
$paragraphBox3="Quel que soit le type de crédit et quelle que soit la banque auprès de laquelle vous souscrivez votre emprunt, l’assurance MyM Crédit vous accompagne.";



if ($creditParticuliers!=null) {
$paragraph1 = $creditParticuliers->paragraph1;
$titre2 = $creditParticuliers->titre2;
$paragraph2 = $creditParticuliers->paragraph2;
$titre3 = $creditParticuliers->titre3;
$titreBox1 = $creditParticuliers->titreBox1;
$paragraphBox1 = $creditParticuliers->paragraphBox1;
$titreBox2 = $creditParticuliers->titreBox2;
$paragraphBox2 = $creditParticuliers->paragraphBox2;
if($proctectionAccidents->image_big !=null) {
$image_big = $proctectionAccidents->image_big;
}
if($creditParticuliers->image_medium !=null) {
$image_medium = $creditParticuliers->image_medium;
}
if($creditParticuliers->image_small !=null) {
$image_small = $creditParticuliers->image_small;
}
if($creditParticuliers->image_mobile !=null) {
$image_mobile = $creditParticuliers->image_mobile;
}
if(
$creditParticuliers->titre_image !=null
){
$titre_image = $creditParticuliers->titre_image;
}
if(
$creditParticuliers->image !=null
){
$image = $creditParticuliers->image;
}

}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-credit-part-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-credit-part-mobile-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-credit-part-small-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-credit-part-medium-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/assu-credit-part-mobile-'. App::getLocale().'.webp')}}" alt="" />
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
                    <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">
                    <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="Mym crédit">
                    <h1 style="visibility: hidden;">MyM Crédit</h1>

                    <p class="col-12" style="margin-top: -4em;">{{ __('assu_credit_part.CREDIT_MyM_TEXT') }}</p>
                    <span id="text"> {{ __('welcome.SAVOIR_PLUS') }} &nbsp <i class="fas fa-caret-right"></i></span>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="" id="Service-part-decouvrir-plus" data-aos="fade-up">
                            <a href="{{ route(app()->getLocale().'-contact-reseau')}}" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('welcome.SAVOIR_PLUS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="flex-item container">
            <!-- Partenaire -->
            <div class="row" id="partenaires">

                <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
                    <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                    <h2>{{ __('assu_credit_part.POURQUOI_SOUSCRIRE') }}</h2>
                    <!-- <h3>Assistance à la famille</h3> -->
                    <p>{{ __('assu_credit_part.POURQUOI_SOUSCRIRE_TEXT') }}</p>
                </div>

                <div class="col-6" id="valeurs" data-aos="fade-right">
                    <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="crédit immobilier">
                </div>

            </div>
            <!-- Partenaires END -->


            <!-- Partenaire small -->
            <div class="container">
                <div class="row" id="partenaires-small">

                    <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
                        <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                        <h2>{{ __('assu_credit_part.POURQUOI_SOUSCRIRE') }}</h2>
                        <!-- <h3>Assistance à la famille</h3> -->
                        <p>{{ __('assu_credit_part.POURQUOI_SOUSCRIRE_TEXT') }}.</p>
                    </div>


                </div>
            </div>

            <!-- END Partenaires Small -->
        </div>


        <div class="flex-item">
            <!-- Nos valeurs -->

            <div class="col-12 mt-3" id="nosvaleurs" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">

                <h2 class="mt-2">{{ __('assu_credit_part.AVANTAGES') }}</h2> <br>
                <br>


            </div>


            <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


            <!-- Nos Valeurs Bouttons Big Size -->
            <div class="container">
                <div class="row " id="raisons-buttons">
                    <div class="col-4" id="raisons-buttons-content" data-aos="fade-down">
                        <div class="carre-container" id="carre-cont-left">
                            <div class="row">
                                <img class="row raisons" src="{{ asset('assets/img/protectionfinanciere.png')}}" alt="Protection financière">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE1') }} </h5>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT1') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container" id="carre-cont-right">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="Souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE2') }}</h5> <br> <br>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT2') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
                        <div class="carre-container" id="carre-cont-right">
                            <div class="row ">
                                <img class="row raisons" src="{{ asset('assets/img/Souscriptionfacilerapide.png')}}" alt="Souscription facile et rapide">
                            </div> <br>
                            <div class="row">
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE3') }}</h5> <br> <br>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT3') }}
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
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE1') }} </h5>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT1') }}
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
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE2') }}</h5>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT2') }}
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
                                <h5>{{ __('assu_credit_part.AVANTAGES_TITRE3') }}</h5>
                                <p>
                                    {{ __('assu_credit_part.AVANTAGES_TEXT3') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nos Valeurs Bouttons Size END -->
        </div>
        <div class="flex-item position-relative flex-column justify-content-center align-items-center" style="z-index: 1000;">
            <div class="row flex-column justify-content-center align-items-center mt-0 mb-5 sous-simul pl-0">
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
    <br>

    <!-- ////////////////////////////////////////////////////////////// -->


    <!-- <div class="row mb-5" id="Service-pro-decouvrir-plus" data-aos="fade-up">
          <a href="{{ route(app()->getLocale().'-professionnel')}}"  class="btn" id="decouvrir-plus"><span><span id="text">Demander un devis</span></span>
          </a>
    </div> -->

</div>
</div>


<!-- Separator -->
<div id="separator">
</div>
@endsection
@section('js')

<script src="{{ asset('assets/js/body-assu-crdemp-part.js')}}"></script>
@endsection
