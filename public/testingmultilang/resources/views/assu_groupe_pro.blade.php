@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-gpe-pro.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-gpe-pro.css')}}" rel="stylesheet">
@endsection
@section('title',"Assurance groupe | Macir Vie")
@section('content')
@php
$image_big="assu-gpe-pro-bg-big.png";
$image_medium="assu-gpe-pro-bg-medium.png";
$image_small="assu-gpe-pro-bg-small.png";
$image_mobile="assu-gpe-pro-bg.png";
$titre_image="MyM_Groupe-01.png";
$paragraph1="Une formule de complémentaire santé et de prévoyance collective dédiée aux entreprises. Parce que vous êtes soucieux du bien-être de vos collaborateurs, Macir Vie met à votre disposition une assurance complète destinée à couvrir les salariés des entreprises ainsi que leurs familles durant leur quotidien.";
$titre1="Pourquoi souscrire ?";
$paragraph2="Votre responsabilité en tant qu’employeur est de vous soucier du bien être de vos salariés et de vos collaborateurs. Pour vous aider à la garantir, nous vous proposons une assurance complète qui regroupe 3 garanties principales :";
$sous_titre1="La Prévoyance";
$paragraph3="Macir Vie garantit le versement d’une rente au bénéficiaire en cas de décès, d’invalidité ou d’incapacité de l’assuré, quelle qu’en soit la cause.";

$sous_titre2="La Complémentaire Santé";
$paragraph4="Macir Vie prend en charge et rembourse les dépenses de santé de vos collaborateurs. Pour de simples consultations médicales, radiologie, analyses médicales, achats de médicaments ou pour des actes chirurgicaux.";

$sous_titre3="Les Prestations Sociales";
$paragraph5="En plus de les accompagner dans les moments difficiles, Macir Vie offre à vos collaborateurs des primes pour célébrer les heureux moments de leur vie tels que le mariage, la naissance ou la circoncision de leurs enfants.";

$titre2="3 bonnes raisons de nous choisir";
$image="Mains-01.svg";
$titreBox1="Gestion 100 % en ligne";
$paragraphBox1="Afin de vous faciliter la gestion de vos dossiers / déclarations de sinistres, Macir Vie a développé une plateforme 100% web et totalement gratuite pour les clients bénéficiant d’une Assurance MyM Groupe Macir Vie.";
$titreBox2="Fidélisez et motivez vos employés";
$paragraphBox2="Tout au long de leurs carrières, l’Assurance MyM Groupe de Macir Vie vous aide à fidéliser et motiver vos employés et collaborateurs.";
$titreBox3="Prise en charge rapide";
$paragraphBox3="Macir Vie vous assure une prise en charge rapide de vos déclarations de sinistres et vous promet des interventions qui respectent les délais de remboursement contractualisés.";



if ($assuranceGroup!=null) {
$paragraph1 = $assuranceGroup->paragraph1;
$titre1 = $assuranceGroup->titre1;
$sous_titre1 = $assuranceGroup->sous_titre1;
$sous_titre2 = $assuranceGroup->sous_titre2;
$sous_titre3 = $assuranceGroup->sous_titre3;
$titre2 = $assuranceGroup->titre2;
$titreBox1 = $assuranceGroup->titreBox1;
$paragraphBox1 = $assuranceGroup->paragraphBox1;
$titreBox2 = $assuranceGroup->titreBox2;
$paragraphBox2 = $assuranceGroup->paragraphBox2;
$titreBox3 = $assuranceGroup->titreBox3;
$paragraphBox3 = $assuranceGroup->paragraphBox3;
if($assuranceGroup->image_big !=null) {
$image_big = $assuranceGroup->image_big;
}
if($assuranceGroup->image_medium !=null) {
$image_medium = $assuranceGroup->image_medium;
}
if($assuranceGroup->image_small !=null) {
$image_small = $assuranceGroup->image_small;
}
if($assuranceGroup->image_mobile !=null) {
$image_mobile = $assuranceGroup->image_mobile;
}
if(
$assuranceGroup->titre_image !=null
){
$titre_image = $assuranceGroup->titre_image;
}
if(
$assuranceGroup->image !=null
){
$image = $assuranceGroup->image;
}
}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
  <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/assu-group-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/assu-group-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/assu-group-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/assu-group-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/assu-group-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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
          <img class="underline" src="{{ asset('assets/img/Line-orange.png')}}">
          <img class="col-12 logo-tbb" src="{{ asset('storage/images/'.$titre_image)}}" alt="mym groupe">
          <h1 style="visibility: hidden;">MyM Groupe</h1>

          <p class="col-12" style="margin-top: -3em;">
            {{ __('assu_groupe_pro.GROUPE_MyM_TEXT') }}
          </p>

        </div>


        <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
      </div>
    </div>
    <div class="flex-item">
      <div class="container">
        <!--
        <div class="row float-right mt-4" id="button-day-night">
        <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
        </div> -->




        <!-- Partenaire -->

        <div class="row" id="partenaires">

          <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
            <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
            <h2 class="mt-2 p-0">{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE') }}</h2>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT') }}
            </p>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE1') }}</h3>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT1') }}
            </p>
            <br>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE2') }}
            </h3>
            <p> {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT2') }}</p>
            <br>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE3') }}</h3>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT3') }}
            </p>
          </div>

          <div class="col-6" id="valeurs" data-aos="fade-right">
            <img class="row valeurs" src="{{ asset('storage/images/'.$image)}}" alt="assurance pour entreprises">
          </div>

        </div>
      </div>

      <!-- Partenaires END -->


      <!-- Partenaire small -->
      <div class="container">
        <div class="row" id="partenaires-small">

          <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
            <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
            <h2>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE') }}</h2>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT') }}
            </p>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE1') }}</h3>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT1') }}
            </p>
            <br>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE2') }}
            </h3>
            <p> {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT2') }}</p>
            <br>
            <h3>{{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TITRE3') }}</h3>
            <p>
              {{ __('assu_groupe_pro.POURQUOI_SOUSCRIRE_TEXT3') }}
            </p>
          </div>

        </div>
      </div>

      <!-- END Partenaires Small -->
    </div>

    <div class="flex-item mt-3">
      <!-- Nos valeurs -->

      <div class="col-12" id="nosvaleurs" data-aos="fade-up">
        <img class="underline" src="{{ asset('assets/img/Line-yellow.png')}}">
        <h2 class="mt-2">{{ __('assu_groupe_pro.AVANTAGES') }}</h2>
      </div>


      <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


      <!-- Nos Valeurs Bouttons Big Size -->
      <div class="container">
        <div class="row " id="raisons-buttons">
          <div class="col-4" id="raisons-buttons-content" data-aos="fade-down">
            <div class="carre-container">
              <div class="row">
                <img class="row raisons" src="{{ asset('assets/img/GestionEnLigne.png')}}" alt="gestion en ligne">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE1') }}</h5> <br> <br>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT1') }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
            <div class="carre-container">
              <div class="row ">
                <img class="row raisons" src="{{ asset('assets/img/FidelisezMotivezVosEmployes.png')}}" alt="fidélisez vos employés">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE2') }}</h5> <br> <br>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT2') }}
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
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE3') }}</h5> <br> <br>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT3') }}
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
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE1') }}</h5>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT1') }}
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
            <div class="carre-container">
              <div class="row ">
                <img class="row raisons" src="{{ asset('assets/img/FidelisezMotivezVosEmployes.png')}}" alt="fidélisez vos employés">
              </div> <br>
              <div class="row">
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE2') }}</h5>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT2') }}
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
                <h5>{{ __('assu_groupe_pro.AVANTAGES_TITRE3') }}</h5>
                <p>
                  {{ __('assu_groupe_pro.AVANTAGES_TEXT3') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Nos Valeurs Bouttons Size END -->

      <!-- ////////////////////////////////////////////////////////////// -->
    </div>

    <div class="flex-item position-relative flex-column justify-content-center align-items-center" style="z-index: 1000;">
            <div class="row flex-column justify-content-center align-items-center mt-0 mb-5 sous-simul pl-0">
                <div id="submit-news-letter-bg">
                <div class="dropdown">
                    <button class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="submit" class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span><span id="text" class="justify-content-center">{{ __('welcome.CONDITIONS')}} &nbsp; <i class="fas fa-caret-down"></i></span></span></button>
                    <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Groupe <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Groupe-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG MyM Groupe-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test text-white" href="#">MyM Santé <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="width: 241px; background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);">
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG_MyM_Sante-FR.pdf') }}">Français</a></li>
                                <li><a class="text-white" target="_blank" href="{{ asset('storage/WL_MV_CG_MyM_Sante-AR.pdf') }}">عربية</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

    <div class="flex-item">
      <div class="col-12 enSavoirPlus">
        <p id="enSavoirPlusTxt">
          {{ __('assu_groupe_pro.E_SANTE_E_ADHERANT') }}
        </p>

        <div class="row" id="Service-part-decouvrir-plus" data-aos="fade-up">
          <a href="{{ route(app()->getLocale().'-plateformes')}}" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('assu_groupe_pro.CLICK_HERE') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
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
<!-- Plugin JavaScript -->
@endsection
@section('js')
<script src="{{ asset('assets/js/body-assu-gpe-pro.js')}}"></script>

@endsection
