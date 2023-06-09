<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Macir Vie est la première compagnie d'assurance privée 100 % algérienne spécialisée dans les assurances des personnes.">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <title>@yield('title')</title>

</head>

<body style="text-align: justify;" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

    <!-- ////////////////////////////////////////////////////////////// -->


    <!-- Navigation bar -->
    <div class="background">

        <nav class="header navbar navbar-expand-md navbar-dark bg-dark positionnement">

            <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->


            <div class="collapse navbar-collapse flex-column " id="navbar">

                <div class="row" id="Bcg">

                    {{-- <div class="cookies-lg">
                        @include('cookieConsent::index')
                    </div> --}}

                    <div class="container respon-align">
                        <ul class="navbar-nav  w-100 justify-content-center bg px-3">
                        <li class="nav-item dropdown col-2 newsletter-desk" id="bgnavitem" style="min-width:190px">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#modalEbook">
                            <i class="fas fa-book svg-inline--fa fa-w-12" aria-hidden="true"></i>
                                {{ __('navbar.DISCOVER_US') }}<span class="sr-only">(current)</span>
                            </a>
                        </li>
                            <li class="nav-item dropdown col-2 newsletter-desk" id="bgnavitem">
                                <a class="nav-link" href="{{ route(app()->getLocale(). '-news')}}" id="newsletter-icon"> <i class="fas fa-envelope svg-inline--fa fa-w-12" aria-hidden="true"></i>{{__('navbar.newsletter')}}<span class="sr-only">(current)</span></a>
                            </li>


                            <li class="nav-item dropdown col-md logo-parent">
                                <a class="nav-link logo-parent" href="{{ route(app()->getLocale(). '-accueil')}}"><img id="logo" src="{{ asset('assets/img/logo.png')}}"> <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown col-2" id="bgnavitem">
                                <a class="nav-link" href="{{URL::to('/')}}/mym" id="espaceclient"><i class="fas fa-user-alt svg-inline--fa fa-w-12" aria-hidden="true"></i><img src="{{ asset('assets/img/MyM-01.png')}}" alt="myMacir" class="my-macir" /></a>
                            </li>
                            <li class="nav-item dropdown col-2" id="bgnavitem">
                                <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><span id="text" class="text-light justify-content-center">{{ __('navbar.LANG') }} &nbsp; <i class="fas fa-caret-down"></i></span></span></div>
                                <div class="dropdown-menu" style="background-image: linear-gradient(45deg, #01062C 0%, #00215F 100%);" aria-labelledby="dropdownMenuButton">
                                    <a href="{{URL::to('language/fr')}}" class="text-white dropdown-item">Français</a>
                                    <a href="{{URL::to('language/ar')}}" class="text-white dropdown-item">عربية</a>
                                </div>
                            </li>

                            <!--
                <li class="nav-item dropdown col-2" id="langue">
                <a class="nav-link" href="{{ route(Route::currentRouteName(), 'en') }}">{{__('navbar.first_lang')}}<span class="sr-only">(current)</span></a>
                <a class="nav-link" >|<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="{{ route(Route::currentRouteName(), 'fr') }}">{{__('navbar.second_lang')}}<span class="sr-only">(current)</span></a>
              <a class="nav-link" >|<span class="sr-only">(current)</span></a>
              <a class="nav-link" href="#"><i class="fas fa-search svg-inline--fa fa-w-12" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
                </li> -->


                        </ul>
                    </div>
                </div>

                <ul class="navbar-nav justify-content-center w-100 bg-secondary px-3">

                    <!-- Uniquement pour small screen -->
                    <li class="nav-item" id="accueil-sm">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-accueil')}}">{{__('navbar.accueil')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
                        </a>
                    </li> <!-- Uniquement pour small screen Fin -->

                    <li class="nav-item" id="apropos-desk">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-apropos')}}">{{__('navbar.apropos')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                        </a>
                    </li>

                    <li class="nav-item dropdown" id="part">
                        <a class="nav-link dropdown-toggle" href="" id="Particulier" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.part')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-pink.png')}}">
                        </a>
                        <div class="dropdown-menu" id="dropdown-navigation-par" aria-labelledby="Particulier" style="{border-radius:5;}">

                            <!-- Uniquement pour small screen -->
                            <a class="dropdown-item" href="{{ route(app()->getLocale(). '-particulier')}}" id="item-particulier-sm">
                                {{__('navbar.part')}}</a>
                            <!-- Uniquement pour small screen Fin -->

                            <a class="dropdown-item" id="assu_vyg" href="{{ route(app()->getLocale(). '-part_assu-voyage')}}"> <span class="assu_vyg"></span> {{__('navbar.part_assu_vyg')}}</a>
                            <a class="dropdown-item" id="assu_acc" href="{{ route(app()->getLocale(). '-part_assu-accident')}}"><span class="assu_acc"></span> {{__('navbar.part_assu_acc')}}</a>
                            <a class="dropdown-item" id="assu_credit_emp" href="{{ route(app()->getLocale(). '-part_assu-creditemp')}}"><span class="assu_credit_emp"></span>
                                {{__('navbar.part_assu_credit_emp')}}</a>
                            <a class="dropdown-item" id="assu_hadj" href="{{ route(app()->getLocale(). '-part_assu-hadj')}}"> <span class="assu_hadj"></span> {{__('navbar.part_assu_hadj')}}</a>
                            <!-- <a class="dropdown-item" id="assu_ayltk" href="{{ route(app()->getLocale().'-part_assu-ayeltek')}}"><span class="assu_ayltk"></span> {{__('navbar.part_assu_ayltk')}}</a> -->
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="Professionnel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.pro')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                        </a>
                        <div class="dropdown-menu" id="dropdown-navigation-pro" aria-labelledby="Professionnel" style="{border-radius:5;}">

                            <!-- Uniquement pour small screen -->
                            <a class="dropdown-item" href="{{ route(app()->getLocale(). '-professionnel')}}" id="item-professionnel-sm"> {{__('navbar.pro')}}</a>
                            <!-- Uniquement pour small screen Fin -->

                            <a class="dropdown-item" id="assu_vyg" href="{{ route(app()->getLocale(). '-pro_assu-voyage')}}"><span class="assu_vyg"></span> {{__('navbar.pro_assu_vyg')}}</a>
                            <a class="dropdown-item" id="assu_gpe" href="{{ route(app()->getLocale(). '-pro_assu-groupe')}}"><span class="assu_gpe"></span></i> {{__('navbar.pro_assu_gpe')}}</a>
                            <a class="dropdown-item" id="assu_credit_emp_pro" href="{{ route(app()->getLocale(). '-pro_assu-creditemp')}}"><span class="assu_credit_emp"></span>
                                {{__('navbar.pro_assu_credit_emp')}}</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-agence-voyage')}}">{{__('navbar.agences_vyg')}}
                            <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
                        </a>
                    </li>

                    <!-- <li class="nav-item">
            <a class="nav-link" href="./mym/#/declaration-sinistres">{{__('navbar.declar_sinistre')}} <span
                class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-yellow.png')}}">
            </a>
          </li> -->

                    <li class="nav-item" id="apropos-mobile">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-apropos')}}">{{__('navbar.apropos')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-mym-pass')}}">MyM Pass <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-yellow.png')}}">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-contact-reseau')}}">{{__('navbar.contact')}} <span class="sr-only">(current)</span>
                            <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
                        </a>
                    </li>
                    <li class="nav-item dropdown navli" id="presentation-mobile">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#modalEbook">
                        <i class="fas fa-book svg-inline--fa fa-w-12" aria-hidden="true"></i>
                        {{ __('navbar.DISCOVER_US') }}<span class="sr-only">(current)</span>
                        </a>

                    </li>
                    <li class="nav-item dropdown" id="newsletter-mobile">
                        <a class="nav-link" href="{{ route(app()->getLocale(). '-news')}}" id="newsletter-icon">
                            <i class="fas fa-envelope svg-inline--fa fa-w-12" aria-hidden="true"></i>
                            {{__('navbar.newsletter')}}<span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item">
        <a class="nav-link" href="#">{{__('navbar.actuvie')}} <span class="sr-only">(current)</span>
        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
    </a>
      </li> -->


                </ul>

            </div>
            <div style="background-color: #002d70;" class="navbar-toggler-left">

                    <div style=" display:flex; align-items: center; justify-content: center;">
                        <button type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-icon px-0" style="float:left;"></button>
                        <a class="d-flex justify-content-center" style="padding-left: -57px;" href="{{ route(app()->getLocale(). '-accueil')}}">
                            <img id="logo-sc" src="{{ asset('assets/img/logo.png')}}">
                        </a>
                    </div>

            </div>
        </nav>

    </div>

    <!-- END NAV BAR -->

    <!-- <div id='stars'></div> -->
    <div id='stars2'></div>
    <div id='stars3'></div>


    <div class="all-content-apart-navbar">
        @include('layouts/modalEbook')
        @yield('content')

        <div id="separator">
        </div>
        <!-- Separator END -->


        <!-- NewsLetter -->
        <div id="bg-newsletter">
            <div class="container">
                <div class="col-8" id="newsletter">
                    <h3 style="padding-top: 10%; color:white; font-size:30px;">
                        {{__('newsletter.abonnez_vous')}}
                    </h3>
                    <p>
                        {{__('newsletter.inscrivez_vous')}}
                    </p>

                    <form action="{{ route('newsletter') }}" method="POST" class="newsletter-big-view">
                        {{ csrf_field() }}
                        <div class="form-group col-8" id="enterMail">
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" name="nom_abonne" class="form-control" id="email-news-letter" aria-describedby="emailHelp" placeholder="{{__('newsletter.Nom')}}" required> <br> <br>
                                </div>
                                <div class="col-sm">
                                    <input type="text" name="prenom_abonne" class="form-control" id="email-news-letter" aria-describedby="emailHelp" placeholder="{{__('newsletter.Prenom')}}" required> <br> <br>
                                </div>
                            </div>
                            <input type="email" name="email_abonne" class="form-control" id="email-news-letter" aria-describedby="emailHelp" placeholder="{{__('newsletter.Email')}}" required>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="news-letter-check" required>
                            <label id="check-text" class="form-check-label" for="news-letter-check">
                                {{__('newsletter.recevoir_actu')}} </label>
                        </div>
                        <div id="submit-news-letter-bg">
                            <button type="submit" class="btn btn-primary" id="submit-news-letter"><span><span id="text" class="justify-content-center">{{__("newsletter.Je m'abonne")}} &nbsp <i class="fas fa-caret-right"></i></span></span></button>
                        </div>
                    </form>

                    <form action="{{ route(app()->getLocale(). '-news') }}" method="GET" class="newsletter-small-view">
                        <div id="submit-news-letter-bg">
                            <button type="submit" class="btn btn-primary" id="submit-news-letter"><span><span id="text" class="justify-content-center">{{__("newsletter.Je m'abonne")}} &nbsp <i class="fas fa-caret-right"></i></span></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- NewsLetter END -->

        <!-- Separator -->
        <div id="separator">
        </div>
        <!-- Separator END -->

        <!-- Footer -->
        <!-- Footer Big -->
        <footer id="footer-big">
            <div class="footer-bg">
                <div class="row">
                    <div class="col-2" id="logo-footer">
                        <img class="" src="{{ asset('assets/img/logo-footer.png')}}">
                    </div>
                    <div class="col-8" id="submenu-footer">
                        <!-- <a href="#">Politique de confidentialité &nbsp</a>
              <a href="#">Termes & conditions &nbsp</a>
              <a href="#">FAQ &nbsp</a>
              <a href="#">Contact</a> -->
                        <br>
                        <p>{{ now()->year }} © {{ __('welcome.DROITS_RESERVE') }}</p>
                        <div id="politique_conf">
                        <a href="{{url('/')}}/fr/politique-confidentialite" target="_blank">{{ __('welcome.POLITIQUE') }}</a>
                        </div>

                    </div>

                    <div class="col-2" id="icons-container-footer">
                        <a href="https://web.facebook.com/MacirVieOfficielle"> <img class="icon-footer" src="{{ asset('assets/img/fb.png')}}"></a>
                        <a href="https://twitter.com/macirvie?lang=fr"> <img class="icon-footer" src="{{ asset('assets/img/tw.png')}}"></a>
                        <a href=" https://www.instagram.com/macir_vie/"><img class="icon-footer" src="{{ asset('assets/img/inst.png')}}"></a>
                        <a href=" https://www.youtube.com/user/MacirVie"> <img class="icon-footer" src="{{ asset('assets/img/yt.png')}}"></a>
                        <a href="https://www.linkedin.com/company/macir-vie/"> <img class="icon-footer" src="{{ asset('assets/img/in.png')}}"></a>

                    </div>
                </div>
            </div>
        </footer>
        <!-- <footer id="footer-big">
    <div class="footer-bg">
      <div class="row">
        <div class="col-2 d-flex align-self-center justify-content-center">
          <img width="50%" src="{{ asset('assets/img/logo-footer.png')}}" alt="">
        </div>
        <div class="col-8">
          <div class="d-flex flex-column">
            <div class="flex-item">
              <div class="col-3 d-flex justify-content-around " id="icons-container-footer">
                <a href="https://web.facebook.com/MacirVieOfficielle" > <img class="icon-footer"
                    src="{{ asset('assets/img/fb.png')}}"></a>
                <a href="https://twitter.com/macirvie?lang=fr" > <img class="icon-footer"
                    src="{{ asset('assets/img/tw.png')}}"></a>
                <a href=" https://www.instagram.com/macir_vie/" ><img class="icon-footer"
                    src="{{ asset('assets/img/inst.png')}}"></a>
                <a href=" https://www.youtube.com/user/MacirVie" > <img class="icon-footer"
                    src="{{ asset('assets/img/yt.png')}}"></a>
                <a href="https://www.linkedin.com/company/macir-vie/" > <img class="icon-footer"
                    src="{{ asset('assets/img/in.png')}}"></a>

              </div>
            </div>
            <div class="flex-item">
              <div id="submenu-footer"><p>2021 © Macir Vie. Tous droits réservés.</p></div>
            </div>
          </div>
        </div>
        <div class="col-2 d-flex align-self-center justify-content-center">
          <img width="70%" src="{{ asset('assets/img/Logo-Veritas-footer.png')}}" alt="">
        </div>
      </div>
    </div>
  </footer> -->
        <!-- Footer Big END -->

        <!-- Footer Small -->
        <footer id="footer-Small">
            <div class="footer-bg">
                <div class="row">
                    <div class="col-12" id="logo-footer">
                        <img class="" src="{{ asset('assets/img/logo-footer.png')}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" id="submenu-footer">
                        <!-- <a href="#">Politique de confidentialité &nbsp</a>
              <a href="#">Termes & conditions &nbsp</a>
              <a href="#">FAQ &nbsp</a>
              <a href="#">Contact</a> -->
                        <br>
                        <p>{{ now()->year }} © {{ __('welcome.DROITS_RESERVE') }}</p>
                    </div>
                </div>
                <div class="col-12" id="politique_conf">
                    <a href="{{url('/')}}/fr/politique-confidentialite" target="_blank">{{ __('welcome.POLITIQUE') }}</a>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center" id="icons-container-footer">
                        <a href="https://web.facebook.com/MacirVieOfficielle"> <img class="icon-footer" src="{{ asset('assets/img/fb.png')}}"></a>
                        <a href="https://twitter.com/macirvie?lang=fr"> <img class="icon-footer" src="{{ asset('assets/img/tw.png')}}"></a>
                        <a href=" https://www.instagram.com/macir_vie/"><img class="icon-footer" src="{{ asset('assets/img/inst.png')}}"></a>
                        <a href=" https://www.youtube.com/user/MacirVie"> <img class="icon-footer" src="{{ asset('assets/img/yt.png')}}"></a>
                        <a href="https://www.linkedin.com/company/macir-vie/"> <img class="icon-footer" src="{{ asset('assets/img/in.png')}}"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Small End-->

        <!-- Footer End -->


        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/Pnipen.svg')}}" />

        <!-- Assets -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"> -->
        <link href="{{ asset('assets/css/navbar.css')}}" rel="stylesheet">
        @yield('css')
        <link href="{{ asset('assets/css/coeur-btn.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/newsletter.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/footer.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/stars.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/coeur-btn-modal.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}"> -->
        <link href="{{ asset('assets/css/responsive-header.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/unicons.css') }}" type="text/css" />
        <link href="{{ asset('assets/css/scrollup.css') }}" rel="stylesheet">

        <script src="https://kit.fontawesome.com/e3d33350d2.js" crossorigin="anonymous"></script>
        <!-- <script src="{{ asset('assets/js/e3d33350d2.js') }}"></script> -->


        <!-- <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/js/navbar.js')}}"></script>
        @yield('js')
        <script src="{{ asset('assets/js/responsive-header.js')}}"></script>
        <script src="{{ asset('assets/js/scrollup.js') }}"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-06FVX08RHH"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-06FVX08RHH');
        </script>
        <script>
            $('#sousTrigger2').mouseenter(function() {
                var img = $('#sousImg2');
                img.attr('src', "{{ asset('assets/img/sous-2-filled.png')}}");
                $('#sousTrigger2').css('opacity', 1);
            });
            $('#sousTrigger2').mouseleave(function() {
                var img = $('#sousImg2');
                img.attr('src', "{{ asset('assets/img/sous-2.png')}}");
                $('#sousTrigger2').css('opacity', 0.5);
            });
            $('#sousTrigger1').mouseenter(function() {
                var img = $('#sousImg1');
                img.attr('src', "{{ asset('assets/img/sous-1-filled.png')}}");
                $('#sousTrigger1').css('opacity', 1);
            });
            $('#sousTrigger1').mouseleave(function() {
                var img = $('#sousImg1');
                img.attr('src', "{{ asset('assets/img/sous-1.png')}}");
                $('#sousTrigger1').css('opacity', 0.5);
            });
        </script>
    </div> <!-- End All content apart Navbar -->
    <!-- ScrollUp -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ScrollUp END -->
</body>

</html>
