@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-plateformes.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-plateformes.css')}}" rel="stylesheet">
@endsection
@section('title',"Plateformes E-santé / E-adhérent | Macir Vie")
@section('image_article', asset('/storage/images/plateformes-big-'. App::getLocale().'.webp'))
@section('content')

@php
$image_big="plateformes-bg-big.png";
$image_medium="plateformes-bg-medium.png";
$image_small="plateformes-bg-small.png";
$image_mobile="plateformes-bg.png";
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/plateformes-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/plateformes-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/plateformes-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/plateformes-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/plateformes-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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

    <!-- Qu'est ce que l'assurance voyage pour particuliers ? -->

    <div class="col-12" id="quismnous" data-aos="fade-up">
      <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}"> <br>

      <h1>{{ __('platformes.TITLE_1') }}</h1> <br>
      <p class="col-12">{{ __('platformes.PARAGRAPH_1_1') }}<br>{{ __('platformes.PARAGRAPH_1_2') }}</p>
    </div>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


    <!-- Nos valeurs -->

    <div class="col-12" id="nosvaleurs" data-aos="fade-up">
      <img class="underline" src="{{ asset('assets/img/Line-pink.png')}}"> <br>

      <h1>{{ __('platformes.TITLE_2') }}</h1> <br>
      <p>{{ __('platformes.PARAGRAPH_2') }}</p>
      <br>


    </div>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


    <!-- Nos Valeurs Bouttons Big Size -->
    <div class="container">
      <div class="row " id="raisons-buttons">
        <div class="col-6" id="raisons-buttons-content" data-aos="fade-left">
          <div class="carre-container">
            <div class="row ">
              <img class="row raisons" src="{{ asset('assets/img/E-sante.png')}}" alt="e-santé">
            </div> <br>
            <div class="row">
              <h5>{{ __('platformes.SANTE') }}</h5> <br>
              <p>{{ __('platformes.SANTE_TEXT') }}</p>
            </div>
            <div class="row justify-content-md-center mb-3">
              <div class="row" id="Service-pro-decouvrir-plus" data-aos="fade-up">
                <a href="{{ route(app()->getLocale().'-contact-reseau') }}" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('platformes.ACCESS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-6" id="raisons-buttons-content" data-aos="fade-up">
          <div class="carre-container">
            <div class="row">
              <img class=" raisons" src="{{ asset('assets/img/E-adherent.png')}}" alt="e-adhérent">
            </div> <br>
            <div class="row">
              <h5>{{ __('platformes.ADHERENT') }}</h5>
              <p>{{ __('platformes.ADHERENT_TEXT') }}</p>
            </div>
            <div class="row justify-content-md-center mb-3">
              <div class="row" id="Service-pro-decouvrir-plus" data-aos="fade-up">
                <a href="{{ route(app()->getLocale().'-contact-reseau') }}" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('platformes.ACCESS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                </a>
              </div>
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
        <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
          <div class="carre-container">
            <div class="row ">
              <img class="row raisons" src="{{ asset('assets/img/E-sante.png')}}" alt="e-santé">
            </div> <br>
            <div class="row">
                <h5>{{ __('platformes.SANTE') }}</h5> <br> <br>
                <p>{{ __('platformes.SANTE_TEXT') }}</p>
            </div>
            <div class="row col-6 mb-3 center-div d-flex justify-content-center">
              <div class="row" id="Service-pro-decouvrir-plus" data-aos="fade-up">
                <a href="https://e-sante.macirvie.com/login.xhtml" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('platformes.ACCESS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                </a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-12" id="raisons-buttons-content" data-aos="fade-up">
          <div class="carre-container">
            <div class="row">
              <img class=" raisons" src="{{ asset('assets/img/E-adherent.png')}}" alt="e-adhérent">
            </div> <br>
            <div class="row">
              <h5>{{ __('platformes.ADHERENT') }}</h5>
              <p>{{ __('platformes.ADHERENT_TEXT') }}</p>
            </div>
            <div class="row col-6 mb-3 center-div d-flex justify-content-center">
              <div class="row" id="Service-pro-decouvrir-plus" data-aos="fade-up">
                <a href="https://e-adherent.macirvie.com/login.xhtml" class="btn" id="decouvrir-plus"><span><span id="text"> {{ __('platformes.ACCESS') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Nos Valeurs Bouttons Size END -->

    <!-- ////////////////////////////////////////////////////////////// -->
  </div>
</div>


<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->
@endsection
@section('js')
<script src="{{ asset('assets/js/body-plateformes.js')}}"></script>

@endsection
