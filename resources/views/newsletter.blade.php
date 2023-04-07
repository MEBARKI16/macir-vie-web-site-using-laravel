@extends('layouts.macirvie')
@section('css')
<link href="{{ asset('assets/css/main-contact-res.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/body-contact-res.css')}}" rel="stylesheet">
@endsection
@section('title',"Contact | Macir Vie")
@section('image_article', asset('/storage/images/newsletter-big-'. App::getLocale().'.webp'))
@section('content')

@php
$image_big="newsletter-bg-big.png";
$image_medium="newsletter-bg-medium.png";
$image_small="newsletter-bg-small.png";
$image_mobile="newsletter-bg.png";
@endphp
<!-- Background Assurance Innovante -->
<header id="innovassurance">
  <div class="box">
  <picture>
        <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/newsletter-big-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/newsletter-mobile-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/newsletter-small-'. App::getLocale().'.webp')}}">
        <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/newsletter-medium-'. App::getLocale().'.webp')}}">
        <img id="bginnovassurance" src="{{ asset('/storage/images/newsletter-mobile-'. App::getLocale().'.webp')}}" alt=""/>
    </picture>
  </div>
</header>
@include('layouts/modals')
@endsection
@section('js')
<script src="{{ asset('assets/js/body.js')}}"></script>
@endsection
