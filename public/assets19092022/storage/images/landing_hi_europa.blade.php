@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-assu-hadj-part.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-hi-europa.css')}}" rel="stylesheet">
@endsection

@section('title',"Partenariat Hi Europa | Macir Vie")

@section('content')
@php


$titre2 = "Macir Vie vous protège des deux côtés de la méditerranée !";

$paragraph1="Macir Vie et la plateforme d’assurance Hi Europa du groupe MAIF s’allient et signent un partenariat visant à accompagner les voyageurs à destination de la France et de l’Algérie.";

$paragraph2="À travers ce partenariat, inédit entre un assureur algérien et européen, vous bénéficiez d’une extension de services dans le secteur de l’assurance et de l’assistance durant tout votre séjour, des deux côtés de la Méditerranée.";

$paragraph3= "Si vous êtes un ressortissant algérien résidant en France, vous bénéficierez d’une couverture d’assurance lors de votre séjour en Algérie et pourrez faire profiter vos proches des produits d’assurance Macir Vie.";

$paragraph4="De plus, si vous vous déplacez en France pour vos études ou pour un nouveau challenge professionnel, Hi Europa vous accompagne durant tout votre séjour en mettant à votre disposition ses produits d’assurance entièrement personnalisables.";

$paragraph5= "Nous faire confiance c’est aussi avoir accès à:";

$paragraph6 = "Contact Hi Europa";

$sous_paragraph11= "Des produits d’assurances aux tarifs attractifs.";
$sous_paragraph12= "Un accompagnement complet lors de votre recherche de logement en France. ";
$sous_paragraph13="Un service complet de dépannage disponible 7j/7.";
$sous_paragraph14="Une plateforme de support téléphonique multilingue.";
$sous_paragraph15="Site Web: www.hieuropa.com";
$sous_paragraph16="Tél: +33 (0) 9 86 01 14 97";

@endphp


<!-- Background Partenariat Hi Europa -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/partenariat-big-fr.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/partenariat-mobile-fr.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/partenariat-Small-fr.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/partenariat-meduim-fr.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/partenariat-mobile-fr.webp')}}" alt="" />
        </picture>
    </div>
</header>


@include('layouts/modals')


<!-- Body of landing page -->

<div class="landing-body">

    <div class="flex-wrapper">
        <div class="flex-item">
            <div class="container">
                <div style="color: #ffffff; margin-top: 85px" class="col-12" id="quismnous" data-aos="fade-up">
                    <h2 class="pt-2">{{$titre2}}</h2>
                    <br>
                    <p class="col-12" id="titleEuropa">
                        {{$paragraph1}}
                    </p>
                    <p> {{$paragraph2}} </p>
                    <p> {{$paragraph3}} </p>
                    <p> {{$paragraph4}} </p> 
                    <br> 
                <div class="row" id="avoirAcces">
                <div class="col-12"  data-aos="fade-left">
                    
                    <p> {{$paragraph5}}</p>
                    <div>
                    <ul id="access">
                        <li> {{$sous_paragraph11}}</li>
                        <li> {{$sous_paragraph12}}</li>
                        <li> {{$sous_paragraph13}}</li>
                        <li> {{$sous_paragraph14}}</li> 
                    </ul>
                    </div>

                </div>
                <div class="col-12"  data-aos="fade-left" id="contact-hi-europa">
                <br><br><br>

                <iframe id="hi-europa-video" class="hi-europa-video" width="560"  height="315" 
                  src="https://www.youtube.com/embed/RIbtucd1I9U"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>

                <div >
                    <button class="button-18" role="button" onclick="window.location.href = 'https://www.hieuropa.com/';"> Visiter Hi Europa</button>  
                    <a class="button-18" role="button" href="tel:+33711223344">Appeler Hi Europa</a>  
                </div>
                
                </div>    
            </div>

            <div id="Service-part-decouvrir-plus">
               <a href="/fr/contact" class="btn" id="decouvrir-plus"><span><span id="text"> Contact &nbsp <i class="fas fa-caret-right"></i></span></span>
              </a>
           </div>
           <br><br>
        </div>  
    </div>

    @endsection

    @section('js')
    <script src="{{ asset('assets/js/body-hi-europa.js')}}"></script>
    @endsection
