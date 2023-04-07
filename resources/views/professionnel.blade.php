@extends('layouts.macirvie')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
<link href="{{ asset('assets/css/main-professionnel.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-professionnel.css')}}" rel="stylesheet">
@endsection
@section('title',"Espace professionnels | Macir Vie")
@section('image_article', asset('/storage/images/pro-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="espace-pro-bg-big.png";
$image_medium="espace-pro-bg-medium.png";
$image_small="espace-pro-bg-big.png";
$image_mobile="espace-pro-bg.png";
$titre1="Espace professionnels";
$paragraph1="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux aux besoins et
attentes des entreprises et des professionnels en matière d’assurance de personnes.";

if ($professionnels!=null) {
$titre1 = $professionnels->titre1;
$paragraph1 = $professionnels->paragraph1;

if($professionnels->image_big !=null) {
$image_big = $professionnels->image_big;
}
if($professionnels->image_medium !=null) {
$image_medium = $professionnels->image_medium;
}
if($professionnels->image_small !=null) {
$image_small = $professionnels->image_small;
}
if($professionnels->image_mobile !=null) {
$image_mobile = $professionnels->image_mobile;
}
}
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
  <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/pro-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/pro-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/pro-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/pro-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/pro-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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

    <!-- Services Part -->


    <div class="col-12" id="Service-part" data-aos="fade-up">
      <img class="underline" src="{{ asset('assets/img/Line-orange.png')}}">
      <h1>{{__('professionel.PRO')}}</h1>
      <p class="col-12 mt-3">
        {{__('professionel.PRO_CONTENT')}}
      </p>
    </div>

    <div class="row justify-content-center" id="Service-part-icons">
      @foreach ($produits as $produit)
      <div class="col-4" id="type-assu" data-aos="fade-up">
        <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
          <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
        </a>
      </div>
      @endforeach


    </div>


    <!-- Small -->
    <div class="container center-div">
      <div class="row" id="Service-part-icons-small">


        <!-- <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-voyage-P.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-groupe.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-credit-P.png')}}"> <br>
      </div>
<br> -->

        <div id="carouselExampleControls" class="owl-carousel">
          @foreach($produits as $produit)
          <div class="d-flex justify-content-center">
            <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
              <img width="50vh" src="{{ asset('assets/img/'.$produit->image)}}" alt="">
            </a>
          </div>
          @endforeach
        </div>

      </div>
    </div>

    <!-- Services Part END -->
  </div>
</div>


<!-- Separator -->
<div id="separator">
</div>
<!-- Separator END -->

@endsection
@section('js')
<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        rtl:"{{App::isLocale('ar') ? 'true' : 'false'}}",
        loop: true,
        margin: 30,
        items: 1,
        stagePadding: 75,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
    });
  });
</script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/body-professionnel.js')}}"></script>
@endsection
