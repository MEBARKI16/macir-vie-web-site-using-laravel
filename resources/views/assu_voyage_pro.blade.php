@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-vyg-pro.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-vyg-pro.css')}}" rel="stylesheet">
@endsection
@section('title',"Assurance voyage pour professionnels | Macir Vie")
@section('image_article', asset('/storage/images/assu-vyg-pro-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="assu-voyg-pro-bg-big.png";
$image_medium="assu-voyg-pro-bg-medium.png";
$image_small="assu-voyg-pro-bg-small.png";
$image_mobile="assu-voyg-pro-bg.png";
$titre_image="MyM_Voyage-01.png";
$paragraph1="Dans un contexte de mondialisation de l’économie, vos collaborateurs sont amenés à se déplacer à l’étranger pour des formations, des séminaires, des négociations de contrats ou pour de nouveaux marchés. Lors de leurs déplacements, vos employés ne sont pas à l'abri d’incidents : accident, maladie, besoin de rapatriement... Offrez leur la protection dont ils ont besoin en souscrivant à l’assurance MyM Voyage.";
$titre1="Pourquoi souscrire ?";
$titre2="3 bonnes raisons de nous choisir";
$image="CommentCaMarche.svg";
$titreBox1="Une assurance en ligne";
$paragraphBox1="Afin de faciliter les procédures de souscriptions à vos collaborateurs, Macir Vie leur donne la possibilité de le faire en quelques clics, grâce à notre plateforme e-paiement.";
$titreBox2="Une assistance 24h/24 et 7j/7";
$paragraphBox2="Que ce soit en Algérie ou à l’étranger, Macir Vie est toujours à votre écoute pour vous assister et vous orienter en cas d’accident.";
$titreBox3="Une prise en charge rapide";
$paragraphBox3="En cas d’imprévus ou d’incidents, Macir Vie met à votre disposition une aide matérielle immédiate.";
$sous_paragraph11="L’assurance voyage dédiée aux entreprises prend en charge :";
$sous_paragraph12="L’invalidité partielle ou totale ;";
$sous_paragraph13="Le rapatriement du corps en cas de décès ;";
$sous_paragraph14="La prise en charge des frais médicaux, pharmaceutiques et d’hospitalisation ;";
$sous_paragraph15="Les soins dentaires d’urgence ;";
$sous_paragraph16="Le retard d’un vol régulier ;";
$sous_paragraph17="La perte de bagage ;";
$sous_paragraph18="L’annulation du voyage ;";
$sous_paragraph19="La défense juridique en cas d’accident.";


if ($assuranceVoyageProfessionnels!=null) {
$paragraph1 = $assuranceVoyageProfessionnels->paragraph1;
$titre1 = $assuranceVoyageProfessionnels->titre1;

$titre2 = $assuranceVoyageProfessionnels->titre2;
$titreBox1 = $assuranceVoyageProfessionnels->titreBox1;
$paragraphBox1 = $assuranceVoyageProfessionnels->paragraphBox1;
$titreBox2 = $assuranceVoyageProfessionnels->titreBox2;
$paragraphBox2 = $assuranceVoyageProfessionnels->paragraphBox2;
$titreBox3 = $assuranceVoyageProfessionnels->titreBox3;
$paragraphBox3 = $assuranceVoyageProfessionnels->paragraphBox3;
$sous_paragraph11 = $assuranceVoyageProfessionnels->sous_paragraph11;
$sous_paragraph12 = $assuranceVoyageProfessionnels->sous_paragraph12;
$sous_paragraph13 = $assuranceVoyageProfessionnels->sous_paragraph13;
$sous_paragraph14 = $assuranceVoyageProfessionnels->sous_paragraph14;
$sous_paragraph15 = $assuranceVoyageProfessionnels->sous_paragraph15;
$sous_paragraph16 = $assuranceVoyageProfessionnels->sous_paragraph16;
$sous_paragraph17 = $assuranceVoyageProfessionnels->sous_paragraph17;
$sous_paragraph18 = $assuranceVoyageProfessionnels->sous_paragraph18;
$sous_paragraph19 = $assuranceVoyageProfessionnels->sous_paragraph19;
if(
$assuranceVoyageProfessionnels->titre_image !=null
){
$titre_image = $assuranceVoyageProfessionnels->titre_image;
}
if(
$assuranceVoyageProfessionnels->image !=null
){
$image = $assuranceVoyageProfessionnels->image;
}
if($assuranceVoyageProfessionnels->image_big !=null) {
$image_big = $assuranceVoyageProfessionnels->image_big;
}
if($assuranceVoyageProfessionnels->image_medium !=null) {
$image_medium = $assuranceVoyageProfessionnels->image_medium;
}
if($assuranceVoyageProfessionnels->image_small !=null) {
$image_small = $assuranceVoyageProfessionnels->image_small;
}
if($assuranceVoyageProfessionnels->image_mobile !=null) {
$image_mobile = $assuranceVoyageProfessionnels->image_mobile;
}
}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
  <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-vyg-pro-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-vyg-pro-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-vyg-pro-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-vyg-pro-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/assu-vyg-pro-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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
        <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->
        <div class="col-12" id="quismnous" data-aos="fade-up">
          <img class="underline" src="{{ asset('assets/img/Line-red.png')}}">
          <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="mym voyage">
          <h1 style="visibility: hidden;">MyM Voyage</h1>
          <p class="col-12" style="margin-top: -3em;">
            {{ __('assu_vyg_pro.MyM_VOYAGE_TEXT') }}
          </p>

        </div>
      </div>
    </div>

    <div class="flex-item">
      <div class="container">

        <!-- <div class="row float-right mt-4" id="button-day-night">
            <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
            </div> -->

        <!-- ////////////////////////////////////////////////////////////// -->


        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


        <!-- Partenaire -->

        <div class="row" id="partenaires">

          <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
            <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
            <h2 class="mt-2">{{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE') }}</h2>
            <p>
              {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT1') }}
            </p>
            <ul>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT2') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT3') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT4') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT5') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT6') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT7') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT8') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT9') }}</li>
            </ul>
          </div>

          <div class="col-6" id="valeurs" data-aos="fade-right">
            <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="assurance voyage pour entreprises">
          </div>

        </div>


      </div>
      <!-- Partenaires END -->


      <!-- Partenaire small -->
      <div class="container">
        <div class="row" id="partenaires-small">

          <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
            <img class="row underline mt-0" src="{{ asset('assets/img/Line-orange.png')}}">
            <h2>{{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE') }}</h2>
            <p>
              {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT1') }}
            </p>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT2') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT3') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT4') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT5') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT6') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT7') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT8') }}</li>
                <li> {{ __('assu_vyg_pro.POURQUOI_SOUSCRIRE_TEXT9') }}</li>
          </div>

        </div>
      </div>
      <!-- END Partenaires Small -->
    </div>

    <div class="flex-item">
      <!-- Nos valeurs -->
      <div class="col-12" id="nosvaleurs" data-aos="fade-up">
        <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">
        <h2 class="m-0 mt-2"> {{ __('assu_vyg_pro.RAISONS') }} </h2>
      </div>


      <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


      <!-- Nos Valeurs Bouttons Big Size -->
      <div class="container">
        <div class="row " id="raisons-buttons">
          <div class="col-4" id="raisons-buttons-content" data-aos="fade-down">
            <div class="carre-container">
              <div class="row">
                <img class="row raisons" src="{{ asset('assets/img/assuranceEnligne.png')}}" alt="assurance en ligne">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_vyg_pro.RAISONS_TITRE1') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_pro.RAISONS_TEXT1') }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
            <div class="carre-container">
              <div class="row ">
                <img class="row raisons" src="{{ asset('assets/img/24-24.png')}}" alt="assistance qutidienne">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_vyg_pro.RAISONS_TITRE2') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_pro.RAISONS_TEXT2') }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-4" id="raisons-buttons-content" data-aos="fade-up">
            <div class="carre-container">
              <div class="row">
                <img class=" raisons" src="{{ asset('assets/img/PriseEnChargeRapide.png')}}" alt="prise en charge rapide">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_vyg_pro.RAISONS_TITRE3') }}</h5> <br> <br>
                <p>
                  {{ __('assu_vyg_pro.RAISONS_TEXT3') }}
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
                <img class="row raisons" src="{{ asset('assets/img/assuranceEnligne.png')}}" alt="assurance en ligne">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_vyg_pro.RAISONS_TITRE1') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_pro.RAISONS_TEXT1') }}
                </p>
              </div>
            </div>

            <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
              <div class="carre-container">
                <div class="row ">
                  <img class="row raisons" src="{{ asset('assets/img/24-24.png')}}" alt="assistance qutidienne">
                </div> <br>
                <div class="row">
                  <h5>{{ __('assu_vyg_pro.RAISONS_TITRE2') }} </h5> <br> <br>
                  <p>
                    {{ __('assu_vyg_pro.RAISONS_TEXT2') }}
                  </p>
                </div>
              </div>
            </div>



            <div class="col-12" id="raisons-buttons-content" data-aos="fade-up">
              <div class="carre-container">
                <div class="row">
                  <img class=" raisons" src="{{ asset('assets/img/PriseEnChargeRapide.png')}}" alt="prise en charge rapide">
                </div> <br>
                <div class="row">
                  <h5>{{ __('assu_vyg_pro.RAISONS_TITRE3') }}</h5>
                  <p>
                    {{ __('assu_vyg_pro.RAISONS_TEXT3') }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- ////////////////////////////////////////////////////////////// -->
      </div>

      <!-- Nos Valeurs Bouttons Size END -->
    </div>

    <div class="flex-item position-relative" style="z-index: 1000;">
        <div class="row flex-column justify-content-md-center align-items-md-center mt-0 mb-5 sous-simul col-lg-8 col-12">
            <div id="submit-news-letter-bg">
                <div class="dropdown">

                    <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="submit" class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span><span id="text" class="justify-content-center">{{ __('welcome.CONDITIONS')}} &nbsp; <i class="fas fa-caret-down"></i></span></span></button>
                    
                    <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Voyage <span class="caret"></span></a>
                            <ul  id="general-submenu" class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Voyage Tunisie <span class="caret"></span></a>
                            <ul id="tunisie-submenu" id="general-submenu" class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Tunisie-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Tunisie-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Voyage Turquie <span class="caret"></span></a>
                            <ul id="turquie-submenu" class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Turquie-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Turquie-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-item">
      <div class="row justify-content-md-center mt-0 mb-5 sous-simul col-8">

        <div id="Service-part-decouvrir-plus">
          <a href="/mym/#/simulation-assurance-voyage" class="btn" id="decouvrir-plus">
            <span>
              <span id="text"> {{ __('welcome.SIMULATION')}} &nbsp <i class="fas fa-caret-right"></i></span>
            </span>
          </a>
        </div>

        <div>&nbsp&nbsp&nbsp&nbsp</div>

        <div id="Service-part-decouvrir-plus">
          <a href="/mym/#/souscription-assurance-voyage" class="btn" id="decouvrir-plus"><span><span id="text">
          {{ __('welcome.SOUSCRIPTION')}} &nbsp <i class="fas fa-caret-right"></i></span></span>
          </a>
        </div>

      </div>
    </div>
    <!-- <div class="flex-item">
      <div class="row flex-column justify-content-center align-items-md-center mt-0 mb-5 sous-simul col-lg-8 col-12">
        <h2 style="text-align: center; color: white;">{{ __('welcome.CONDITIONS') }}:</h2>
        <ul>
            <li style="color: white;"><a class="p-0" style="color: white; text-decoration: underline; font-family: sans-serif; font-size: 14px; text-align: center;" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Tunisie.pdf') }}">MyM Voyage Tunisie</a></li>
            <li style="color: white;"><a class="p-0" style="color: white; text-decoration: underline; font-family: sans-serif; font-size: 14px; text-align: center;" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Turquie.pdf') }}">MyM Voyage Turquie</a></li>
            <li style="color: white;"><a class="p-0" style="color: white; text-decoration: underline; font-family: sans-serif; font-size: 14px; text-align: center;" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage.pdf') }}">MyM Voyage Generale</a></li>
        </ul>
      </div>
    </div> -->
  </div>
</div>




<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->

@endsection
@section('js')
<script src="{{ asset('assets/js/body-assu-vyg-pro.js')}}"></script>

@endsection
