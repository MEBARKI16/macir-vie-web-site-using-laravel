@extends('layouts.macirvie')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body.css')}}" rel="stylesheet">
@endsection
@section('title',"Macir Vie - Compagnie d'assurance de personnes")
@section('content')
@php
$image_big="bg-big.png";
$image_medium="bg-medium.png";
$image_small="bg-small.png";
$image_mobile="bg.png";
$titre1="Première compagnie privée spécialisée dans les assurances de personnes";
$paragraph1="Macir Vie a été fondée le 11 août 2011, suite à la séparation des assurances de personnes et des
assurances dommages. Grâce aux compétences d'une équipe chevronnée, la compagnie a bénéficié d'une connaissance
approfondie du contexte social et économique algérien. C'est ainsi que Macir Vie a pu apporter une réelle valeur
ajoutée sur le marché des assurances, en concevant des produits à la hauteur des attentes et besoins spécifiques de
nos assurés, qu'ils soient professionnels ou particuliers.";
$image1="man-run.svg";
$titre2="Pourquoi nous choisir ?";
$paragraph2="Macir Vie fonde ses actions sur trois valeurs cardinales : la Fiabilité, la Proximité et l'Innovation.
C'est en incarnant ces valeurs que nos équipes vous offrent un service de qualité au quotidien.";
$titre3="Services aux Particuliers";
$paragraph3="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux à vos besoins
et ceux de vos proches en matière d'assurance de personnes.";
$titre4="Services aux Professionnels";
$paragraph4="Macir Vie a développé des produits et des services sur-mesure, afin de répondre au mieux aux besoins et
attentes des entreprises et des professionnels en matière d'assurance de personnes.";
$titre5="Espace Agences de voyages";
$paragraph5="Macir Vie met à disposition des agences de voyages conventionnées, un espace dédié pour la gestion des
assurances de leurs clients. Cela leur permet de proposer des services et des séjours touristiques uniques,
complets, qui répondent aux attentes d'une clientèle de plus en plus exigeante.";
$image2="valeurs.png";
$image3="valise.svg";
if ($welcome!=null) {
$titre1 = $welcome->titre1;
$paragraph1 = $welcome->paragraph1;
$titre2 = $welcome->titre2;
$paragraph2 = $welcome->paragraph2;
$titre3 = $welcome->titre3;
$paragraph3 = $welcome->paragraph3;
$titre4 = $welcome->titre4;
$paragraph4 = $welcome->paragraph4;
$titre5 = $welcome->titre5;
$paragraph5 = $welcome->paragraph5;
if($welcome->image_big !=null) {
$image_big = $welcome->image_big;
}
if($welcome->image_medium !=null) {
$image_medium = $welcome->image_medium;
}
if($welcome->image_small !=null) {
$image_small = $welcome->image_small;
}
if($welcome->image_mobile !=null) {
$image_mobile = $welcome->image_mobile;
}
if($welcome->image1 !=null) {
$image1 = $welcome->image1;
}
if($welcome->image2 !=null) {
$image2 = $welcome->image2;
}
if($welcome->image3 !=null) {
$image3 = $welcome->image3;
}
}
@endphp
<!-- Old header
<header id="innovassurance">
  <div class="box">

    <img id="bginnovassurance" class="" src="{{ asset('storage/images/'.$image_big)}}" alt="Une assurance innovante">

    <div class="text col-4">
      <h2>{{__('welcome.assu_inov_1')}} <br> {{__('welcome.assu_inov_2')}}</h2>
    </div>
  </div>
</header>
-->

<header id="innovassurance">
    <div class="owl-hero-carousel owl-carousel">
        @foreach($heroSectionImages as $heroSectionImage)
        <div>
            @if($heroSectionImage->link)
            <a href="{{$heroSectionImage->link}}" @if($heroSectionImage->new_tab) target="_blank" @endif>
                <picture>
                    <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-big-'. App::getLocale().'.webp')}}">
                    <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-medium-'. App::getLocale().'.webp')}}">
                    <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-small-'. App::getLocale().'.webp')}}">
                    <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-mobile-'. App::getLocale().'.webp')}}">
                    <img src="{{ asset('/storage/images/'.$heroSectionImage->path.'-mobile-'. App::getLocale().'.webp')}}" alt="" />
                </picture>
            </a>
            @else
            <picture>
                <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-big-'. App::getLocale().'.webp')}}">
                <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-medium-'. App::getLocale().'.webp')}}">
                <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-small-'. App::getLocale().'.webp')}}">
                <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/'.$heroSectionImage->path.'-mobile-'. App::getLocale().'.webp')}}">
                <img src="{{ asset('/storage/images/'.$heroSectionImage->path.'-mobile-'. App::getLocale().'.webp')}}" alt="" />
            </picture>
            @endif

        </div>
        @endforeach
    </div>
</header>
<!-- <script>
    var heroSectionImages = document.getElementsByClassName("heroSectionCarousel");
    var w = window.outerWidth;
    console.log(heroSectionImages);
    for (let img of heroSectionImages) {
        let cleanedName = img.getAttribute("src").replaceAll(/(-(mobile|small|medium|big))/g, '');
        const src_splitted_array = cleanedName.split('.');
        const extention = src_splitted_array.pop();
        cleanedName = src_splitted_array.join(".");
        if (w == 0) {
            document.getElementById('bginnovassurance').src = "{{ asset('storage/images/'.$image_big)}}";
            document.getElementById("bginnovassurance").className = "big";
        } else if (w <= 768) {
            img.setAttribute("src", cleanedName + '-mobile.' + extention);
        } else if (w > 768 && w <= 992) {
            img.setAttribute("src", cleanedName + '-small.' + extention);
        } else if (w > 768 && w <= 992) {
            img.setAttribute("src", cleanedName + '-medium.' + extention);
        } else {
            img.setAttribute("src", cleanedName + '-big.' + extention);
        }


    }
</script> -->

@include('layouts/modals');


<!-- ////////////////////////////////////////////////////////////// -->

<!-- Separator -->
<div id="separator" style="margin-top: -48px;">
</div>
<!-- Separator END -->

<!-- Body of landing page -->

<div class="landing-body">
    <div class="container">

        <!-- <div class="row float-right mt-4" id="button-day-night">
    <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
    </div> -->



        <!-- ////////////////////////////////////////////////////////////// -->

        <!-- Souscription Big Size -->

        <div class="row" id="souscription-buttons">
            <div class="col-2" id="souscription-buttons-content" data-aos="fade-left">
            </div>
            <div class="col-2"></div>
            <div class="col-4" id="souscription-buttons-content" data-aos="fade-left">
                <div class="row">
                    <a href="./mym/#/souscription-assurance-voyage" id="souscription-link">
                        <img class="row souscription" src="{{ asset('assets/img/sous-voyage.png')}}" alt="souscription assurance voyage">
                    </a>
                </div>
                <div class="row">
                    <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
                </div>
                <div class="row justify-content-center">
                    <a href="./mym/#/souscription-assurance-voyage">
                        <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_VYG')}}</p>
                    </a>
                </div>
                </a>
            </div>
            <div class="col-2"></div>

            <!-- <div class="col-4" id="souscription-buttons-content" data-aos="fade-right">
                <div class="row">
                    <a href="./mym/#/souscription-protection-accidents" id="souscription-link">
                        <img class="row souscription" src="{{ asset('assets/img/sous-acc-vie.png')}}" alt="Souscription assurance garantie des accidents de la vie">
                    </a>
                </div>
                <div class="row">
                    <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                </div>
                <div class="row justify-content-center">
                    <a href="./mym/#/souscription-protection-accidents">
                        <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_ACC')}}</p>
                    </a>
                </div>
            </div> -->
            <div class="col-2" id="souscription-buttons-content" data-aos="fade-left">
            </div>
        </div>

        <!-- Souscription Big Size END -->
        <!-- ////////////////////////////////////////////////////////////// -->

        <!-- Souscription Small Size -->
        <div id="souscription-buttons-small">
            <div class="row">
                <div class="col-6">
                    <div id="souscription-buttons-content">
                        <div class="row">
                            <a href="./mym/#/souscription-assurance-voyage" id="souscription-link">
                                <img class="row souscription" src="{{ asset('assets/img/sous-voyage.png')}}" alt="souscription assurance voyage">
                            </a>
                        </div>
                        <div class="row">
                            <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <a href="./mym/#/souscription-assurance-voyage">
                                <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_VYG')}}</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div id="souscription-buttons-content">
                        <div class="row">
                            <a href="./mym/#/souscription-protection-accidents" id="souscription-link">
                                <img class="row souscription" src="{{ asset('assets/img/sous-acc-vie.png')}}" alt="Souscription assurance garantie des accidents de la vie">
                            </a>
                        </div>
                        <div class="row">
                            <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <a href="./mym/#/souscription-protection-accidents">
                                <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_ACC')}} </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Souscription Small Size END -->

        <!-- ////////////////////////////////////////////////////////////// -->
        <div class="service-swap">
            <div class="first-order">
                <!-- Lumière -->
                <div class="row company-lum " id="lumiere">
                    <img class="lumiere" src="{{ asset('assets/img/light.webp')}}">
                </div>
                <!-- Lumière END -->
                <!-- premiere-companie -->

                <div class="container">
                    <div class="row mt-3" id="premiere-companie" data-aos="fade-up">
                        <div class="col-8" id="text-premiere-comp">
                            <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                            <h1>{{ __('welcome.FIRST_COMP') }}</h1>
                            <p>
                                {{ __('welcome.FIRST_COMP_TEXT') }}
                            </p>

                            <div class="small-uniquement-center">
                                <a href="{{ route(app()->getLocale(). '-apropos') }}" id="ensavoirplus"><span style="font-size:20px;">→ </span>{{ __('welcome.SAVOIR_PLUS') }}</a>
                            </div>
                        </div>

                        <div class="col-4" id="manrun">
                            <img class="row manrun" src="{{ asset('storage/images/'.$image1)}}" alt="Compagnie d'assurance des personnes">
                        </div>
                    </div>
                </div>
                <!-- premiere-companie END -->

                <!-- Pourquoi nous choisir -->

                <div class="container">
                    <div id="prq-nous-choisir">

                        <div id="valeurs" data-aos="fade-right">
                            <img class="row valeurs" src="{{ asset('storage/images/valeurs-'. App::getLocale() .'.png')}}" alt="valeurs macir vie">
                        </div>

                        <div id="text-prq-choisir" data-aos="fade-left">
                            <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
                            <h2>{{ __('welcome.POURQUOI_NOUS') }}</h2>
                            <p>
                                {{ __('welcome.POURQUOI_NOUS_TEXT') }}
                            </p>

                            <a href="{{ route(app()->getLocale(). '-apropos')}}" id="ensavoirplus"><span style="font-size:20px;">→ </span>{{ __('welcome.SAVOIR_PLUS') }}</a>
                        </div>

                    </div>

                    <div class="row pb-3" id="prq-nous-choisir-small">

                        <div id="valeurs">
                            <img class="row valeurs" src="{{ asset('storage/images/valeurs-'. App::getLocale() .'.png')}}" alt="valeurs macir vie">
                        </div>
                        <br>
                        <div class="mt-3" id="text-prq-choisir">
                            <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
                            <h2>{{ __('welcome.POURQUOI_NOUS') }}</h2>
                            <p>
                                {{ __('welcome.POURQUOI_NOUS_TEXT') }}
                            </p>

                            <div class="small-uniquement-center">
                                <a href="{{ route(app()->getLocale(). '-apropos')}}" id="ensavoirplus"><span style="font-size:20px;">→ </span>{{ __('welcome.SAVOIR_PLUS') }}</a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Pourquoi nous choisir END -->
            </div>

            <div class="seconde-order">
                <!-- Lumière -->
                <div class="row service-lum" id="lumiere">
                    <img class="lumiere" src="{{ asset('assets/img/light.webp')}}">
                </div>
                <!-- Lumière END -->
                <!-- Services Part -->

                <div class="col-12" id="Service-part" data-aos="fade-up">
                    <img class="underline" src="{{ asset('assets/img/Line-pink.png')}}"> <br>
                    <h2>{{ __('welcome.SERVICES_PART') }}</h2> <br>
                    <p class="col">
                        {{ __('welcome.SERVICES_PART_TEXT') }}
                    </p>
                </div>


                <div class="row" id="Service-pro-icons" style="display:flex;justify-content:center">

                    @foreach ($produitsPar as $key=>$produit)
                    <div class="col-4" id="type-assu" data-aos="fade-left">
                    <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                        <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- Small -->
            <div class="">
                <div class="row" id="Service-part-icons-small">
                    <div id="carouselParControls" class="owl-carousel owl-product-carousel">
                        @foreach($produitsPar as $produit)
                        <div class="d-flex justify-content-center">
                            <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                                <img width="50vh" src="{{ asset('assets/img/'.$produit->image)}}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Small END -->


            <div class="row" id="Service-part-decouvrir-plus" data-aos="fade-up">
                <a href="{{ route(app()->getLocale().'-particulier')}}" class="btn" id="decouvrir-plus"><span><span id="text" class="justify-content-center"> {{ __('welcome.SPACE') }} {{ __('welcome.PART') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
                </a>
            </div>

            <!-- Services Part END -->


            <!-- Services Pro -->

            <div class="col-12" id="Service-pro" style="padding-top:9%;" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-orange.png')}}"> <br>
                <h2>{{ __('welcome.SERVICES_PRO') }}</h2> <br>
                <p class="col">
                    {{ __('welcome.SERVICES_PRO_TEXT') }}
                </p>
            </div>


            <div class="row" id="Service-pro-icons">

                @foreach ($produitsPro as $key=>$produit)
                @if ($key<3) @if ($key==0) <div class="col-4" id="type-assu" data-aos="fade-right">
                    <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                        <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
                    </a>
            </div>
            @endif
            @if ($key==1)
            <div class="col-4" id="type-assu" data-aos="fade-up">
                <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                    <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
                </a>
            </div>
            @endif
            @if ($key==2)
            <div class="col-4" id="type-assu" data-aos="fade-left">
                <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                    <img src="{{ asset('/storage/images/'.$produit->image)}}"> <br>
                </a>
            </div>
            @endif
            @endif
            @endforeach
        </div>

        <!-- Small -->
        <div class="row" id="Service-pro-icons-small">

            <div id="carouselProControls" class="owl-carousel owl-product-carousel">
                @foreach($produitsPro as $produit)
                <div class="d-flex justify-content-center">
                    <a href="{{ route(app()->getLocale() .'-'. $produit->lien)}}">
                        <img width="50vh" src="{{ asset('assets/img/'.$produit->image)}}" alt="">
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        <!-- Pro Small ENd -->

        <div class="row" id="Service-pro-decouvrir-plus" data-aos="fade-up">
            <a href="{{ route(app()->getLocale().'-professionnel')}}" class="btn" id="decouvrir-plus"><span><span id="text" class="justify-content-center" style="line-height: 1em;">{{ __('welcome.SPACE') }}
                        <br> {{ __('welcome.PRO') }} &nbsp <i class="fas fa-caret-right"></i></span></span>
            </a>
        </div>

        <!-- Services Pro END -->
    </div>
    <!-- Espace Agence -->
    <div class="container">
        <div class="row" id="espace-agence">
            <div class="col-8" id="text-espace-agence" data-aos="fade-right">
                <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}" alt="Espace agences de voyage">
                <h2>{{ __('welcome.ESPACE_AGENCE_VYG') }}</h2>
                <p>
                    {{ __('welcome.ESPACE_AGENCE_VYG_TEXT') }}
                </p>
                <div class="small-uniquement-center">
                    <a href="{{ route(app()->getLocale().'-agence-voyage')}}" id="ensavoirplus"><span style="font-size:20px;">→ </span>{{ __('welcome.SAVOIR_PLUS') }}</a>
                </div>
            </div>

            <div class="col-4" id="valise" data-aos="fade-left">
                <img class="row valise" src="{{ asset('storage/images/'.$image3)}}" alt="Espace agences de voyage">
            </div>
        </div>
    </div>
    <!-- Espace Agence END -->
</div>







</div>
</div>
@endsection
@section('js')
<script>
    window.onresize = function(event) {
        var w = window.outerWidth;
        var heroSectionImages = document.getElementsByClassName("heroSectionCarousel");
        for (let img of heroSectionImages) {
            let cleanedName = img.getAttribute("src").replaceAll(/(-(mobile|small|medium|big))/g, '');
            const src_splitted_array = cleanedName.split('.');
            const extention = src_splitted_array.pop();
            cleanedName = src_splitted_array.join(".");
            if (w == 0) {
                document.getElementById('bginnovassurance').src = "{{ asset('storage/images/'.$image_big)}}";
                document.getElementById("bginnovassurance").className = "big";
            } else if (w <= 768) {
                img.setAttribute("src", cleanedName + '-mobile.' + extention);
            } else if (w > 768 && w <= 992) {
                img.setAttribute("src", cleanedName + '-small.' + extention);
            } else if (w > 768 && w <= 992) {
                img.setAttribute("src", cleanedName + '-medium.' + extention);
            } else {
                img.setAttribute("src", cleanedName + '-big.' + extention);
            }
        }
    };
</script>
<script>
    $(document).ready(function() {
        $('.owl-hero-carousel').owlCarousel({
            rtl:"{{App::isLocale('ar') ? 'true' : 'false'}}",
            loop: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            touchDrag: true,
            mouseDrag: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });
        $('.owl-product-carousel').owlCarousel({
            rtl:"{{App::isLocale('ar') ? 'true' : 'false'}}",
            loop: true,
            margin: 20,
            items: 1,
            stagePadding: 75,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
        });
    });
</script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/body.js')}}"></script>
@endsection
