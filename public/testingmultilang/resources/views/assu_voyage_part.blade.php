@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-vyg-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-vyg-part.css')}}" rel="stylesheet">
@endsection
@section('title',"Assurance voyage pour particuliers | Macir Vie")
@section('content')
@php
$image_big="assu-voyg-part-bg-big.png";
$image_medium="assu-voyg-part-bg-medium.png";
$image_small="assu-voyg-part-bg-small.png";
$image_mobile="assu-voyg-part-bg.png";
$titre_image="MyM_Voyage-01.png";
$paragraph1="Voyagez en toute sérénité et confiance avec notre assurance voyage. Afin de parer à toute mauvaise surprise (accident, maladie, retard de vol...), Macir Vie met à votre disposition une assurance voyage valable pour les demandes de Visa (Schengen…) et qui vous couvre tout au long de votre séjour à l’étranger.";
$titre1="Pourquoi souscrire ?";
$paragraph_desc="L’assurance MyM Voyage vous protège lors de vos séjours à l’étranger en cas d’accident ou de maladie, avec les meilleures garanties du marché.";
$sous_titre1="Assistance à la famille";
$sous_paragraph11="En cas d’accident , Macir Vie prend en charge :";
$sous_paragraph12="Le rapatriement des enfants de moins de 12 ans se trouvant seuls avec l’assuré.";
$sous_paragraph13="Les frais de déplacement urgent de l’assuré, dû à un accident imprévu lors du voyage.";
$sous_paragraph14="La transmission de messages urgents aux proches de l’assuré.";
$sous_titre2="Assistance médicale et rapatriement";
$sous_paragraph21="En cas de maladie ou accident à l’étranger Macir Vie :";
$sous_paragraph22="Assure votre transport et/ou votre rapatriement selon les impératifs médicaux.";
$sous_paragraph23="Prend en charge les frais d’envoi de médicaments, sans limites.";
$sous_paragraph24="Prend en charge vos soins dentaires d’urgence.";
$sous_paragraph24="Assure la prolongation de votre séjour.";
$sous_paragraph25="Macir Vie fonde ses actions sur trois valeurs cardinales : la Fiabilité, la Proximité et
l’Innovation. C’est en incarnant ces valeurs que nos équipes vous offrent un service de qualité au quotidien.";

$sous_titre3="Assistance juridique à l’étranger";
$sous_paragraph31="Une caution pénale est versée aux tribunaux étrangers pour garantir la liberté provisoire de
l’assuré, au cours de la procédure pénale engagée contre ce dernier suite à un accident de la circulation dans
lequel le bénéficiaire conduisait personnellement le véhicule.";
$sous_paragraph32="Prise en charge des frais d’avocat et de défense juridique à l’étranger de l’assuré dans les
procédures pénales ou civiles qui sont engagées contre ce dernier en cas d’accident de la circulation.";

$titreBox1="15% de réduction";
$paragraphBox1="Souscrivez en ligne sur votre espace MyM et bénéficiez de 15% de réduction, en utilisant votre carte CIB ou EDDAHABIA.";
$titreBox2="Assistance 24h/24 et 7j/7";
$paragraphBox2="Pour que votre voyage rime avec sérénité, nos équipes sont à votre disposition afin de vous assister et répondre à vos demandes 24h/24 et 7J/7.";
$titreBox3="Acceptée par toutes les chancelleries";
$paragraphBox3="Obligatoire lorsqu’il s’agit de voyager vers l’espace Schengen, notre Assurance MyM Voyage est acceptée par toutes les chancelleries européennes et la majorité des représentations consulaires en Algérie.";
$image="Palmier.svg";
$titre2="3 bonnes raisons de nous choisir";



if ($assuranceVoyageParticuliers!=null) {
$paragraph1 = $assuranceVoyageParticuliers->paragraph1;
$titre1 = $assuranceVoyageParticuliers->titre1;
$titre2 = $assuranceVoyageParticuliers->titre2;
$sous_titre1 = $assuranceVoyageParticuliers->sous_titre1;
$sous_titre2 = $assuranceVoyageParticuliers->sous_titre2;
$sous_titre3 = $assuranceVoyageParticuliers->sous_titre3;
$titreBox1 = $assuranceVoyageParticuliers->titreBox1;
$paragraphBox1 = $assuranceVoyageParticuliers->paragraphBox1;
$titreBox2 = $assuranceVoyageParticuliers->titreBox2;
$paragraphBox2 = $assuranceVoyageParticuliers->paragraphBox2;
$titreBox3 = $assuranceVoyageParticuliers->titreBox3;
$paragraphBox3 = $assuranceVoyageParticuliers->paragraphBox3;
$sous_paragraph11 = $assuranceVoyageParticuliers->sous_paragraph11;
$sous_paragraph12 = $assuranceVoyageParticuliers->sous_paragraph12;
$sous_paragraph13 = $assuranceVoyageParticuliers->sous_paragraph13;
$sous_paragraph14 = $assuranceVoyageParticuliers->sous_paragraph14;
$sous_paragraph21 = $assuranceVoyageParticuliers->sous_paragraph21;
$sous_paragraph22 = $assuranceVoyageParticuliers->sous_paragraph22;
$sous_paragraph23 = $assuranceVoyageParticuliers->sous_paragraph23;
$sous_paragraph24 = $assuranceVoyageParticuliers->sous_paragraph24;
$sous_paragraph25 = $assuranceVoyageParticuliers->sous_paragraph25;
$sous_paragraph31 = $assuranceVoyageParticuliers->sous_paragraph31;
$sous_paragraph32 = $assuranceVoyageParticuliers->sous_paragraph32;



if(
$assuranceVoyageParticuliers->titre_image !=null
){
$titre_image = $assuranceVoyageParticuliers->titre_image;
}
if(
$assuranceVoyageParticuliers->image !=null
){
$image = $assuranceVoyageParticuliers->image;
}
if($assuranceVoyageParticuliers->image_big !=null) {
$image_big = $assuranceVoyageParticuliers->image_big;
}
if($assuranceVoyageParticuliers->image_medium !=null) {
$image_medium = $assuranceVoyageParticuliers->image_medium;
}
if($assuranceVoyageParticuliers->image_small !=null) {
$image_small = $assuranceVoyageParticuliers->image_small;
}
if($assuranceVoyageParticuliers->image_mobile !=null) {
$image_mobile = $assuranceVoyageParticuliers->image_mobile;
}
}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-vyg-part-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-vyg-part-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-vyg-part-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-vyg-part-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/assu-vyg-part-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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
          <img class="underline" src="{{ asset('assets/img/Line-green.png')}}">

          <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="Mym Voyage">
          <h1 style="visibility: hidden;">MyM Voyage</h1>
          <p class="col-12" style="margin-top: -3em;">
            {{ __('assu_vyg_part.MyM_VOYAGE_TEXT') }}
          </p>

        </div>


        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


        <!-- Partenaire -->
        <div class="container">
          <div class="row" id="partenaires">

            <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
              <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
              <h2>{{ __('assu_vyg_part.POURQUOI_SOUSCRIRE') }}</h2>
              <p>{{ __('assu_vyg_part.POURQUOI_SOUSCRIRE_TEXT') }}</p>
              <div>
                <h3>{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE') }}</h3>
                <p class="mb-0">{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT1') }}</p>
                <ul>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT2') }}</li>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT3') }}</li>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT4') }}</li>
                </ul>
              </div>
              <div>
                <h3>{{ __('assu_vyg_part.ASSISTANCE_MEDICALE') }}</h3>
                <p class="mb-0">{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT1') }}</p>
                <ul>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT2') }}</li>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT3') }}</li>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT4') }}</li>
                </ul>
              </div>
              <div>
                <h3>{{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER') }}</h3>
                <ul>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER_TEXT1') }}</li>
                <li class="pt-0">{{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER_TEXT2') }}</li>
                </ul>
              </div>
            </div>

            <div class="col-6" id="valeurs" data-aos="fade-right">
              <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="Palmier Voyage">
            </div>

          </div>


        </div>
      </div>
      <!-- Partenaires END -->
    </div>

    <div class="flex-item">
      <!-- Partenaire small -->
      <div class="container">
        <div class="row" id="partenaires-small">

          <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
            <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
            <h2>{{ __('assu_vyg_part.POURQUOI_SOUSCRIRE') }}</h2>
            <h3>{{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE') }}</h3>
            <p> {{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT1') }}
              <li>
                {{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT2') }}
              </li>
              <li> {{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT3') }}</li>
              <li> {{ __('assu_vyg_part.ASSISTANCE_A_FAMILLE_TEXT4') }}</li>
            </p>
            <br>
            <h3>{{ __('assu_vyg_part.ASSISTANCE_MEDICALE') }}
            </h3>
            <p>{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT1') }}</p>
            <li>{{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT2') }}</li>
            <li> {{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT3') }}</li>
            <li> {{ __('assu_vyg_part.ASSISTANCE_MEDICALE_TEXT4') }}</li>

            <br>
            <h3>{{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER') }}
            </h3>

            <li> {{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER_TEXT1') }}</li>

            <li> {{ __('assu_vyg_part.ASSISTANCE_JURIDIQUE_A_ETRANGER_TEXT2') }}</li>

            </p>
          </div>

        </div>
      </div>
      <!-- END Partenaires Small -->
    </div>

    <div class="flex-item">
      <!-- Nos valeurs -->
      <div class="col-12" id="nosvaleurs" data-aos="fade-up">
        <img class="underline" src="{{ asset('assets/img/Line-green.png')}}">
        <h2 class="m-0 mt-2"> {{ __('assu_vyg_part.RAISONS') }} </h2> <br> <br>
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
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE1') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT1') }}
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
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE2') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT2') }}
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
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE3') }}</h5>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT3') }}
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
        <div class="row " id="raisons-buttons-small" style="padding-top: 0px !important;">
          <div class="col-12" id="raisons-buttons-content" data-aos="fade-down">
            <div class="carre-container">
              <div class="row">
                <img class="row raisons" src="{{ asset('assets/img/sous-en-ligne.png')}}" alt="souscription en ligne">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE1') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT1') }}
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
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE2') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT2') }}
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
                <h5>{{ __('assu_vyg_part.RAISONS_TITRE3') }} </h5> <br> <br>
                <p>
                  {{ __('assu_vyg_part.RAISONS_TEXT3') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
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
                            <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Voyage Tunisie <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Tunisie-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Voyage Tunisie-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Voyage Turquie <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
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
          <a href="/mym/#/simulation-assurance-voyage" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('welcome.SIMULATION')}} &nbsp <i class="fas fa-caret-right"></i></span></span>
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
  </div>
</div>
</div>


<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->
@endsection
@section('js')

<script src="{{ asset('assets/js/body-assu-vyg-part.js')}}"></script>
@endsection
