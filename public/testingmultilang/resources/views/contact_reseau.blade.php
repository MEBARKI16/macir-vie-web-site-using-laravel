@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-contact-res.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-contact-res.css')}}" rel="stylesheet">
@endsection
@section('title',"Contact | Macir Vie")
@section('content')

@php
$image_big="contact-bg-big.png";
$image_medium="contact-bg-medium.png";
$image_small="contact-bg-small.png";
$image_mobile="contact-bg.png";
@endphp

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
    <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/contact-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/contact-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/contact-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/contact-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/contact-mobile-'. App::getLocale().'.webp')}}" alt=""/>
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
    <div class="container all" style="margin-bottom: 20px;">

        <!--
    <div class="row float-right mt-4" id="button-day-night">
    <span id ="switch" class="switch-night" src="{{ asset('assets/img/Switch.png')}}"></span>
    </div> -->

        <!-- ////////////////////////////////////////////////////////////// -->

        <!-- Contactez Nous -->

        <div class="container">

            <div class="row d-flex justify-content-between">
                @if (session('successMsg'))
                <div class="alert alert-success alert-dismissible fade show col-12" role="alert" style="margin-top:12%; text-align:center;">
                    {{ __('contact.YOUR_MESSAGE') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif


                <div class="col-sm" id="quismnous" data-aos="fade-up">

                    <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">
                    <h1>{{ __('contact.CONTACT_US') }}</h1> <br>

                    <form id="survey-form" action="{{ route('contactus') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-4">
                                <label id="vous-etes-label" for="vous_etes">{{ __('contact.USER_TYPE') }} *</label>
                            </div>
                            <div class="col-8">
                                <select id="dropdown" name="vous_etes" class="dropdown float-right">
                                    <option selected value="particulier">{{ __('contact.PART') }}</option>
                                    <option value="professionnel">{{ __('contact.PRO') }}</option>
                                    <option value="entreprise">{{ __('contact.ENTP') }}</option>
                                    <option value="agenceVoyage">{{ __('contact.AGENCE_VOYAGE') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="nom-label" for="nom">{{ __('contact.LAST_NAME') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="nom" id="nom" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="prenom-label" for="prenom">{{ __('contact.FIRST_NAME') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="prenom" id="prenom" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="fonction-label" for="fonction">{{ __('contact.FUNCTION') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="fonction" id="fonction" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="ville-label" for="ville">{{ __('contact.CITY') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="ville" id="ville" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="numero-label" for="numero">{{ __('contact.PHONE') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="tel" name="numero" id="numero" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="email-label" for="email">{{ __('contact.EMAIL') }} *</label>
                            </div>
                            <div class="col-8">
                                <input type="email" name="email" id="email" class="input-field float-right" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="objet-label" for="objet">{{ __('contact.SUBJECT') }} *</label>
                            </div>
                            <div class="col-8">
                                <select id="dropdown" name="objet" class="dropdown float-right">
                                    <option selected value="devis">{{ __('contact.DEVIS') }}</option>
                                    <option value="e-paiement">{{ __('contact.E_PAYMENT') }}</option>
                                    <option value="information">{{ __('contact.INFO') }}</option>
                                    <option value="reclamation">{{ __('contact.RECLAMATION') }}</option>
                                    <option value="suggestion">{{ __('contact.SUGGESTION') }}</option>
                                    <option value="recrutement">{{ __('contact.RECTUTEMENT') }}</option>
                                    <option value="autres">{{ __('contact.OTHER') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label id="message-label" for="message">{{ __('contact.MESSAGE') }} * </label>
                            </div>
                            <div class="col-8">
                                <textarea class="float-right" name="message" maxlength="1000" id="message" class="input-field" placeholder="{{ __('contact.CONTENT') }}" required></textarea>

                                <div class="justify-content-center">
                                    <div id="submit-contact-form-bg">
                                        <button type="submit" class="btn btn-primary" id="submit-contact-form"><span><span id="text">{{ __('contact.SEND') }} &nbsp <i C></i></span></span></button>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </form>

                </div>
                <!-- ////////////////////////////////////////////////////////////// -->




                <!-- Notre siege social -->
                <div class="col-sm" id="partenaires" data-aos="fade-up">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="underline p-0" src="{{ asset('assets/img/Line-blue.png')}}">
                        <h2 class="p-0">{{ __('contact.OUR_COMP') }}</h2>
                    </div>

                    <br>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/Picto1.png')}}" class="icon-contact mr-2"></img>
                        <p>{{ __('contact.ADDRESS') }}</p>
                    </div>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/Picto2.png')}}" class="icon-contact mr-2"></img>
                        <div class="mb-1">
                            <p style="direction: ltr; {{ (App::isLocale('ar') ? 'text-align: right;' : 'text-align: left;') }}" class="m-0 p-0">{{ __('contact.PHONE1') }}</p>
                            <p style="direction: ltr;" class="m-0 p-0">{{ __('contact.PHONE2') }}</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/Picto3.png')}}" class="icon-contact mr-2"></img>
                        <p style="direction: ltr;">{{ __('contact.FAX') }}</p>
                    </div>

                    <div class="d-flex align-items-center" style="margin-bottom : 20px">
                        <img src="{{ asset('assets/img/Picto4.png')}}" class="icon-contact mr-2"></img>
                        <p>{{ __('contact.OUR_EMAIL') }}</p>
                    </div>
                    <!-- ////////////////////////////////////////////////////////////// -->



                    <!-- Nos horaires d'ouverture -->
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">
                        <h2>{{ __('contact.OPENING') }}</h2><br>
                    </div>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/Picto5.png')}}" class="icon-contact mr-2"></img>
                        <p>{{ __('contact.OPENING_CONTENT') }}</p>
                    </div>

                </div>
            </div>
            <div class="d-flex flex-column justify-content-center col-sm" id="partenaires-small" data-aos="fade-up">
                <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">
                <h2 class="p-0">{{ __('contact.OUR_COMP') }}</h2>

                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/Picto1.png')}}" class="icon-contact mr-2"></img>
                    <p>{{ __('contact.ADDRESS') }}</p>
                </div>

                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/Picto2.png')}}" class="icon-contact mr-2"></img>
                    <div class="mb-1">
                        <p style="direction: ltr; {{ (App::isLocale('ar') ? 'text-align: right;' : 'text-align: left;') }}" class="m-0 p-0">{{ __('contact.PHONE1') }}</p>
                        <p style="direction: ltr;" class="m-0 p-0">{{ __('contact.PHONE2') }}</p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/Picto3.png')}}" class="icon-contact mr-2"></img>
                    <p style="direction: ltr;">{{ __('contact.FAX') }}</p>
                </div>

                <div class="d-flex align-items-center" style="margin-bottom : 20px">
                    <img src="{{ asset('assets/img/Picto4.png')}}" class="icon-contact mr-2"></img>
                    <p>{{ __('contact.OUR_EMAIL') }}</p>
                </div>
                <!-- ////////////////////////////////////////////////////////////// -->



                <!-- Nos horaires d'ouverture -->
                <img class="underline" src="{{ asset('assets/img/Line-blue.png')}}">
                <h2 style="font-size: 1.8rem;"><p>{{ __('contact.OPENING') }}</p></h2><br>

                <div class="d-flex align-items-center mt-2">
                    <img src="{{ asset('assets/img/Picto5.png')}}" class="icon-contact mr-2"></img>
                    <p class="p-0 m-0"><p>{{ __('contact.OPENING_CONTENT') }}</p></p>
                </div>

            </div>

            <!-- ////////////////////////////////////////////////////////////// -->

        </div>
    </div>
</div>


<!-- Separator -->
<div id="separator">
</div>

@endsection
@section('js')
<script async defer src="https://maps.google.com/maps/api/js?key=AIzaSyAn_UqvERw3LdcNLkBK0gcJdA_FpJcRkrw&libraries=places&callback=initMap">
</script>
<script src="{{ asset('assets/js/map.js')}}"></script>

<script src="{{ asset('assets/js/body-contact-res.js')}}"></script>
@endsection
