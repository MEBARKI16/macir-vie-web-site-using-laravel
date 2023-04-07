
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="L’assurance Macir 3AYELTEK vous permet de sécuriser l’avenir de vos proches dans le cas où vous ne pouvez pas subvenir à leurs besoins.">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/Pnipen.svg')}}" />

  <!-- Assets -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/navbar.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/main-assu-ayltk-part.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/body-assu-ayltk-part.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/newsletter.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/coeur-btn.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/footer.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/stars.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/coeur-btn-modal.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <title>Macir 3AYELTEK | Macir Vie</title>

</head>

<body>

  <!-- ////////////////////////////////////////////////////////////// -->


  <!-- Navigation bar -->
  <div class="background">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark positionnement">

      <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
      <div class="navbar-toggler-left">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <div style="align-items:center;">
            <span class="navbar-toggler-icon" style="float:left;"></span>
            <img id="logo-sc" src="{{ asset('assets/img/logo.png')}}">
          </div>
        </button>
      </div>

      <div class="collapse navbar-collapse flex-column " id="navbar">

        <div class="row" id="Bcg">

          <div class="cookies-lg">
            @include('cookieConsent::index')
          </div>

          <div class="container respon-align">
            <ul class="navbar-nav  w-100 justify-content-center bg px-3">

              <li class="nav-item dropdown col-2" id="bgnavitem">
                <a class="nav-link" href="{{ route('news', app()->getLocale())}}" id="newsletter-icon"> <i class="fas fa-envelope svg-inline--fa fa-w-12" aria-hidden="true"></i>{{__('navbar.newsletter')}}<span class="sr-only">(current)</span></a>
              </li>


              <li class="nav-item dropdown col-md logo-parent">
                <a class="nav-link logo-parent" href="{{ route('accueil', app()->getLocale())}}"><img id="logo" src="{{ asset('assets/img/logo.png')}}"> <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropdown col-2" id="bgnavitem">
                <a class="nav-link" href="/mym/" id="espaceclient"><i class="fas fa-user-alt svg-inline--fa fa-w-12" aria-hidden="true"></i><img src="{{ asset('assets/img/MyM-01.png')}}" alt="myMacir" class="my-macir" /> <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="{{ route('accueil', app()->getLocale())}}">{{__('navbar.accueil')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
            </a>
          </li> <!-- Uniquement pour small screen Fin -->

          <li class="nav-item">
            <a class="nav-link" href="{{ route('apropos', app()->getLocale())}}">{{__('navbar.apropos')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-blue.png')}}">
            </a>
          </li>

          <li class="nav-item dropdown" id="part">
            <a class="nav-link dropdown-toggle" href="" id="Particulier" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.part')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-pink.png')}}" style="visibility:visible;">
            </a>
            <div class="dropdown-menu" id="dropdown-navigation-par" aria-labelledby="Particulier" style="{border-radius:5;}">

              <!-- Uniquement pour small screen -->
              <a class="dropdown-item" href="{{ route('particulier', app()->getLocale())}}" id="item-particulier-sm">
                {{__('navbar.part')}}</a>
              <!-- Uniquement pour small screen Fin -->

              <a class="dropdown-item" id="assu_vyg" href="{{ route('part_assu-voyage', app()->getLocale())}}"> <span class="assu_vyg"></span> {{__('navbar.part_assu_vyg')}}</a>
              <a class="dropdown-item" id="assu_acc" href="{{ route('part_assu-accident', app()->getLocale())}}"><span class="assu_acc"></span> {{__('navbar.part_assu_acc')}}</a>
              <a class="dropdown-item" id="assu_credit_emp" href="{{ route('part_assu-creditemp', app()->getLocale())}}"><span class="assu_credit_emp"></span>
                {{__('navbar.part_assu_credit_emp')}}</a>
              <a class="dropdown-item" id="assu_hadj" href="{{ route('part_assu-hadj', app()->getLocale())}}"> <span class="assu_hadj"></span> {{__('navbar.part_assu_hadj')}}</a>
              <!-- <a class="dropdown-item" id="assu_ayltk" href="{{ route('part_assu-ayeltek', app()->getLocale())}}"><span class="assu_ayltk"></span> {{__('navbar.part_assu_ayltk')}}</a> -->

            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="Professionnel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('navbar.pro')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
            </a>
            <div class="dropdown-menu" id="dropdown-navigation-pro" aria-labelledby="Professionnel" style="{border-radius:5;}">

              <!-- Uniquement pour small screen -->
              <a class="dropdown-item" href="{{ route('professionnel', app()->getLocale())}}" id="item-professionnel-sm"> {{__('navbar.pro')}}</a>
              <!-- Uniquement pour small screen Fin -->

              <a class="dropdown-item" id="assu_vyg" href="{{ route('pro_assu-voyage', app()->getLocale())}}"><span class="assu_vyg"></span> {{__('navbar.pro_assu_vyg')}}</a>
              <a class="dropdown-item" id="assu_gpe" href="{{ route('pro_assu-groupe', app()->getLocale())}}"><span class="assu_gpe"></span></i> {{__('navbar.pro_assu_gpe')}}</a>
              <a class="dropdown-item" id="assu_credit_emp_pro" href="{{ route('pro_assu-creditemp', app()->getLocale())}}"><span class="assu_credit_emp"></span>
                {{__('navbar.pro_assu_credit_emp')}}</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('agence-voyage', app()->getLocale())}}">{{__('navbar.agences_vyg')}}
              <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/mym/#/declaration-sinistres">{{__('navbar.declar_sinistre')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-yellow.png')}}">
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact-reseau', app()->getLocale())}}">{{__('navbar.contact')}} <span class="sr-only">(current)</span>
              <img class="row underline" src="{{ asset('assets/img/Line-red.png')}}">
            </a>
          </li>

          <!-- <li class="nav-item">
        <a class="nav-link" href="#">{{__('navbar.actuvie')}} <span class="sr-only">(current)</span>
        <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
    </a>
      </li> -->


        </ul>

      </div>
    </nav>

  </div>

  <!-- END NAV BAR -->

  <div id='stars2'></div>
  <div id='stars3'></div>

  <div class="all-content-apart-navbar">


    <!-- Background Assurance Innovante -->
    <header id="innovassurance">
      <div class="box">
        <img id="bginnovassurance" class="mobile" src="{{ asset('assets/img/assu-ayltk-part-bg.png')}}" alt="">
        <img id="bginnovassurance" class="small" src="{{ asset('assets/img/assu-ayltk-part-bg-small.png')}}" alt="">
        <img id="bginnovassurance" class="medium" src="{{ asset('assets/img/assu-ayltk-part-bg-medium.png')}}" alt="">
        <img id="bginnovassurance" class="big" src="{{ asset('assets/img/assu-ayltk-part-bg-big.png')}}" alt="">
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
        <img class="underline" src="{{ asset('assets/img/Line-white.png')}}">
        <h1>Qu’est-ce que l’assurance vie Macir 3AYELTEK ?</h1> <br>
        <p class="col-12">
          L’assurance vie Macir 3AYELTEK vous permet de faire bénéficier vos proches d’un capital, en cas de décès ou
          d’invalidité.
          Elle vous permet aussi de sécuriser l’avenir de vos proches en les mettant à l’abri du besoin, dans le cas où
          vous n’êtes
          plus à leurs côtés ou que vous ne pouvez plus subvenir à leurs besoins.</p>

      </div>


      <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


      <!-- Partenaire -->

      <div class="row" id="partenaires">

        <div class="col-6" id="text-prq-choisir" data-aos="fade-left">
          <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
          <h1>Pourquoi souscrire ?</h1>
          <p>
            En cas d’invalidité absolue et définitive (IAD) : <br> <br>

            Il est difficile de subvenir à vos besoins et ceux de vos proches lorsque vous êtes
            dans l’incapacité de travailler, à cause d’une maladie ou d’un accident.
            Souscrivez à Macir 3AYELTEK, et assurez votre avenir financier et celui de votre famille. <br> <br>

            En cas de décès : <br><br>

            L’assurance vie Macir 3AYELTEK permet à l’assuré de mettre ses proches à l’abri du besoin, par le versement
            d’un capital suite à un décès. Souscrivez à Macir AYELTEK et protégez votre famille des soucis financiers de
            la vie.
          </p>
        </div>

        <div class="col-6" id="valeurs" data-aos="fade-right">
          <img class="row valeurs" src="{{ asset('assets/img/Main.svg')}}">
        </div>

      </div>


    </div>

    <!-- Partenaires END -->


    <!-- Partenaire small -->
    <div class="container">
      <div class="row" id="partenaires-small">

        <div class="col-12" id="text-prq-choisir" data-aos="fade-left">
          <img class="row underline" src="{{ asset('assets/img/Line-white.png')}}">
          <h1>Pourquoi souscrire ?</h1>
          <p>
            En cas d’invalidité absolue et définitive (IAD) : <br><br>

            Il est difficile de subvenir à vos besoins et ceux de vos proches lorsque vous êtes
            dans l’incapacité de travailler, à cause d’une maladie ou d’un accident.
            Souscrivez à Macir 3AYELTEK, et assurez votre avenir financier et celui de votre famille. <br><br>

            En cas de décès : <br><br>

            L’assurance vie Macir 3AYELTEK permet à l’assuré de mettre ses proches à l’abri du besoin, par le versement
            d’un capital suite à un décès. Souscrivez à Macir AYELTEK et protégez votre famille des soucis financiers de
            la vie.
          </p>
        </div>

      </div>
    </div>

    <!-- END Partenaires Small -->


    <!-- Nos valeurs -->

    <div class="col-12" id="nosvaleurs" data-aos="fade-up">
      <img class="underline" src="{{ asset('assets/img/Line-green.png')}}"> <br>

      <h1>3 bonnes raisons de souscrire à l’assurance vie Macir 3AYELTEK</h1> <br>
      <br>


    </div>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->


    <!-- Nos Valeurs Bouttons Big Size -->
    <div class="container">
      <div class="row " id="raisons-buttons">
        <div class="col-4" id="raisons-buttons-content" data-aos="fade-down">
          <div class="carre-container">
            <div class="row">
              <img class="row raisons" src="{{ asset('assets/img/assuranceSurMesure.png')}}">
            </div> <br>
            <div class="row">
              <h5>UNE ASSURANCE SUR-MESURE</h5> <br> <br>
              <p>
                Avec l’assurance vie Macir 3AYELTEK, vous avez la possibilité de personnaliser votre contrat en fonction
                de vos moyens, grâce à un simulateur
                en ligne, gratuit et sans engagement.
                La souscription est possible à partir
                de 2 000 DA/an seulement! </p>
            </div>
          </div>
        </div>

        <div class="col-4 " id="raisons-buttons-content" data-aos="fade-left">
          <div class="carre-container">
            <div class="row ">
              <img class="row raisons" src="{{ asset('assets/img/assuranceEnligne.png')}}">
            </div> <br>
            <div class="row">
              <h5>UNE ASSURANCE EN LIGNE</h5> <br> <br>
              <p>
                Afin de vous faciliter les procédures
                de souscription et de vous éviter
                les déplacements inutiles, Macir Vie vous offre la possibilité de souscrire
                à votre assurance vie en quelques clics, grâce à votre carte de paiement
                CIB ou EDAHABIA. </p>
            </div>
          </div>
        </div>



        <div class="col-4" id="raisons-buttons-content" data-aos="fade-up">
          <div class="carre-container">
            <div class="row">
              <img class=" raisons" src="{{ asset('assets/img/niveauIndemnisationImportant.png')}}">
            </div> <br>
            <div class="row">
              <h5>UN NIVEAU D’INDEMNISATION IMPORTANT</h5>
              <p>
                L’assurance vie Macir 3AYELTEK vous offre des indemnisations qui peuvent atteindre les 3 000 000 DA
                en cas de décès ou d’invalidité.</p>
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
              <img class="row raisons" src="{{ asset('assets/img/assuranceSurMesure.png')}}">
            </div> <br>
            <div class="row">
              <h5>UNE ASSURANCE SUR-MESURE</h5> <br> <br>
              <p>
                Avec l’assurance vie Macir 3AYELTEK, vous avez la possibilité de personnaliser votre contrat en fonction
                de vos moyens, grâce à un simulateur
                en ligne, gratuit et sans engagement.
                La souscription est possible à partir
                de 2 000 DA/an seulement! </p>
            </div>
          </div>
        </div>

        <div class="col-12 " id="raisons-buttons-content" data-aos="fade-left">
          <div class="carre-container">
            <div class="row ">
              <img class="row raisons" src="{{ asset('assets/img/assuranceEnligne.png')}}">
            </div> <br>
            <div class="row">
              <h5>UNE ASSURANCE EN LIGNE</h5> <br> <br>
              <p>
                Afin de vous faciliter les procédures
                de souscription et de vous éviter
                les déplacements inutiles, Macir Vie vous offre la possibilité de souscrire
                à votre assurance vie en quelques clics, grâce à votre carte de paiement
                CIB ou EDAHABIA. </p>
            </div>
          </div>
        </div>



        <div class="col-12" id="raisons-buttons-content" data-aos="fade-up">
          <div class="carre-container">
            <div class="row">
              <img class=" raisons" src="{{ asset('assets/img/niveauIndemnisationImportant.png')}}">
            </div> <br>
            <div class="row">
              <h5>UN NIVEAU D’INDEMNISATION IMPORTANT</h5>
              <p>
                L’assurance vie Macir 3AYELTEK vous offre des indemnisations qui peuvent atteindre les 3 000 000 DA
                en cas de décès ou d’invalidité.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- Nos Valeurs Bouttons Size END -->

      <!-- ////////////////////////////////////////////////////////////// -->


      <div class="row justify-content-md-center mt-0 mb-5 sous-simul col-8">

        <div id="Service-part-decouvrir-plus">
          <a href="#" class="btn" id="decouvrir-plus"><span><span id="text"> SIMULATION &nbsp <i class="fas fa-caret-right"></i></span></span>
          </a>
        </div>

        <div>&nbsp&nbsp&nbsp&nbsp</div>

        <div id="Service-part-decouvrir-plus">
          <a href="#" class="btn" id="decouvrir-plus"><span><span id="text"> SOUSCRIPTION &nbsp <i class="fas fa-caret-right"></i></span></span>
          </a>
        </div>

      </div>


    </div>
  </div>


  <!-- Separator -->
  <div id="separator">
  </div>
  <!-- Separator END -->

  <!-- NewsLetter -->
  <div id="bg-newsletter">
    <div class="container">
      <div class="col-8" id="newsletter">
        <h1>
          {{__('newsletter.abonnez_vous')}}
        </h1>
        <p>
          {{__('newsletter.inscrivez_vous')}}
        </p>

        <form action="{{ route('newsletter') }}" method="POST" class="newsletter-detailed-view">
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
            <label id="check-text" class="form-check-label" for="news-letter-check"> {{__('newsletter.recevoir_actu')}}
            </label>
          </div>
          <div id="submit-news-letter-bg">
            <button type="submit" class="btn btn-primary" id="submit-news-letter"><span><span id="text">{{__("newsletter.Je m'abonne")}} &nbsp <i class="fas fa-caret-right"></i></span></span></button>
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
          <p>2021 © Macir Vie. Tous droits réservés.</p>
        </div>

        <div class="col-2" id="icons-container-footer">
          <a href="https://web.facebook.com/MacirVieOfficielle"> <img class="icon-footer" src="{{ asset('assets/img/fb.png')}}"></a>
          <a href="https://twitter.com/macirvie?lang=fr"> <img class="icon-footer" src="{{ asset('assets/img/tw.png')}}"></a>
          <a href="	https://www.instagram.com/macir_vie/"><img class="icon-footer" src="{{ asset('assets/img/inst.png')}}"></a>
          <a href="	https://www.youtube.com/user/MacirVie"> <img class="icon-footer" src="{{ asset('assets/img/yt.png')}}"></a>
          <a href="https://www.linkedin.com/company/macir-vie/"> <img class="icon-footer" src="{{ asset('assets/img/in.png')}}"></a>

        </div>
      </div>
    </div>
  </footer>
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
          <p>2021 © Macir Vie. Tous droits réservés.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center" id="icons-container-footer">
          <a href="https://web.facebook.com/MacirVieOfficielle"> <img class="icon-footer" src="{{ asset('assets/img/fb.png')}}"></a>
          <a href="https://twitter.com/macirvie?lang=fr"> <img class="icon-footer" src="{{ asset('assets/img/tw.png')}}"></a>
          <a href="	https://www.instagram.com/macir_vie/"><img class="icon-footer" src="{{ asset('assets/img/inst.png')}}"></a>
          <a href="	https://www.youtube.com/user/MacirVie"> <img class="icon-footer" src="{{ asset('assets/img/yt.png')}}"></a>
          <a href="https://www.linkedin.com/company/macir-vie/"> <img class="icon-footer" src="{{ asset('assets/img/in.png')}}"></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Small End-->

  <!-- Footer End -->

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/js/navbar.js')}}"></script>
  <script src="{{ asset('assets/js/body-assu-ayltk-part.js')}}"></script>


</body>

</html>
