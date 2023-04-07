@extends('layouts.macirvie')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
<link href="{{ asset('assets/css/main-particulier.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-particulier.css')}}" rel="stylesheet">
@endsection
@section('title',"Espace particuliers | Macir Vie")
@section('image_article', asset('/storage/images/particulier-big-'. App::getLocale().'.webp'))
@section('content')
@php
$image_big="espace-part-bg-big.png";
$image_medium="espace-part-bg-medium.png";
$image_small="espace-part-bg-small.png";
$image_mobile="espace-part-bg.png";
$titre1="Espace particuliers";
$paragraph1="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux à vos besoins
et ceux de vos proches en matière d'assurance de personnes.";
$image="";
if ($particuliers!=null) {
$image = $particuliers->image;
$titre1 = $particuliers->titre1;
$paragraph1 = $particuliers->paragraph1;

if($particuliers->image_big !=null) {
$image_big = $particuliers->image_big;
}
if($particuliers->image_medium !=null) {
$image_medium = $particuliers->image_medium;
}
if($particuliers->image_small !=null) {
$image_small = $particuliers->image_small;
}
if($particuliers->image_mobile !=null) {
$image_mobile = $particuliers->image_mobile;
}
}
@endphp

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/particulier-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/particulier-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/particulier-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/particulier-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/particulier-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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
            <img class="underline" src="{{ asset('assets/img/Line-pink.png')}}">
            <h1>{{ __('particulier.PART') }}</h1>
            <p class="col-12 mt-3">
                {{__('particulier.PART_CONTENT')}}
            </p>
        </div>

        <!-- <h1>Présentation des services dédiés aux particuliers</h1> <br> -->

        <div class="row justify-content-center" id="Service-part-icons">
            @foreach ($produits as $produit)
            <div class="col-4" id="type-assu" data-aos="fade-up">
                <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                    <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
                </a>
            </div>
            @endforeach


            <!-- <div class="col-4" id="type-assu" data-aos="fade-up">
      <a href="{{ route(app()->getLocale() .'-part_assu-ayeltek')}}" >
          <img src="{{ asset('assets/img/assu_ayeltek.png')}}"> <br>
          </a>
      </div> -->

            {{-- <div class="col-4" id="type-assu" data-aos="fade-left">
          <a href="{{ route('part_assu-tabibou', app()->getLocale())}}" >
            <img src="{{ asset('assets/img/assu_medicale.png')}}"> <br>
            </a>
        </div> --}}

    </div>


    <!-- Small -->
    <div class="container center-div">
        <div class="row" id="Service-part-icons-small">


            <!-- <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-voyage.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-accidents.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/Assu-credit.png')}}"> <br>
      </div>
<br>
     <div class="" id="type-assu">
          <img src="{{ asset('assets/img/assu_hadj.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/assu_ayeltek.png')}}"> <br>
      </div>
<br>
      <div class="" id="type-assu">
          <img src="{{ asset('assets/img/assu_medicale.png')}}"> <br>
      </div> -->

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

<script src="{{ asset('assets/js/body-particulier.js')}}"></script>
@endsection
