@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-vyg-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-assu-vyg-part.css')}}" rel="stylesheet">
<style>
    #quismnous ol {
        text-align: center;
        list-style-position: inside;
        padding: 0;
    }
    #quismnous ol li {
        font-weight: 100;
        padding-top: 0%;
        font-size: 14px;
        color: white;
        font-family: sans-serif;
    }
    ol > li::marker {
      font-weight: bold;
    }
</style>
@endsection
@section('title',"MyM Pass | Macir Vie")
@section('content')

<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/mym_pass-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/mym_pass-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/mym_pass-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/mym_pass-big-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/mym_pass-big-'. App::getLocale().'.webp')}}" alt=""/>
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
        <div class="col-12" id="quismnous" data-aos="fade-up">
          <img class="underline" src="{{ asset('assets/img/Line-green.png')}}">

          <img class="col-12 logo-tbb" src="{{ asset('storage/images/MyM Pass.png')}}" alt="MyM Pass">
          <h1 style="visibility: hidden;">MyM Pass</h1>
          <p class="col-12" style="margin-top: -3em;">
            {{ __('mym_pass.PARAGRAPH1_1') }} <strong> MyM Pass</strong> {{ __('mym_pass.PARAGRAPH1_2') }}
          </p>
          <p class="col-12">
            {{ __('mym_pass.PARAGRAPH2') }}
          </p>
          <p class="col-12">
            {{ __('mym_pass.PARAGRAPHE3_1') }} <a href="https://www.macirvie.com/mym"> www.macirvie.com/mym </a> {{ __('mym_pass.PARAGRAPHE3_2') }}
          </p>
          <p class="col-12">
            {{ __('mym_pass.PARAGRAPHE4_1') }} <strong> MyM Pass </strong> {{ __('mym_pass.PARAGRAPHE4_2') }}
          </p>
          <p class="col-12">
            {{ __('mym_pass.PARAGRAPHE5') }}
          </p>
          <div class="flex justify-content-center">
            <ol>
                <li>{{ __('mym_pass.PARAGRAPHE5_1') }}</li>
                <li>{{ __('mym_pass.PARAGRAPHE5_2') }}</li>
                <li>{{ __('mym_pass.PARAGRAPHE5_3') }}</li>
                <li>{{ __('mym_pass.PARAGRAPHE5_4') }}</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- Partenaires END -->
    </div>

    <div class="flex-item">
      <div class="row justify-content-md-center mt-0 mb-5 sous-simul col-8">
        <div id="Service-part-decouvrir-plus">
          <a href="/mym/#/souscription-assurance-voyage" class="btn" id="decouvrir-plus"><span><span id="text">
          {{ __('welcome.SOUSCRIPTION')}} &nbsp <i class="fas fa-caret-right"></i></span></span>
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

<script src="{{ asset('assets/js/body-assu-vyg-part.js')}}"></script>
@endsection
