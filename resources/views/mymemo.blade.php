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

    ol>li::marker {
        font-weight: bold;
    }
</style>
@endsection
@section('title',"My Memo - Livre Blanc | Macir Vie")
@section('image_article', asset('/storage/images/mymemo-big-'. App::getLocale().'.webp'))
@section('content')

<!-- Background Assurance Innovante -->
<header id="innovassurance">
    <div class="box">
        <picture>
            <source media="(min-width: 1301px)" srcset="{{ asset('/storage/images/mymemo-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 480px)" srcset="{{ asset('/storage/images/mymemo-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 820px)" srcset="{{ asset('/storage/images/mymemo-big-'. App::getLocale().'.webp')}}">
            <source media="(max-width: 1300px)" srcset="{{ asset('/storage/images/mymemo-big-'. App::getLocale().'.webp')}}">
            <img id="bginnovassurance" src="{{ asset('/storage/images/mymemo-big-'. App::getLocale().'.webp')}}" alt="" />
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
                    <p style="color:#fff;font-weight:bold;font-size:20px;display:none;padding:20%" id="bonne_lecture">Bonne lecture!</p>
                    <div class="col-12 text-center" id="video_mymemo_landing">
                        <p style="color:#fff;text-align:center">" Parce que nous voulons toujours être innovants et utiles, nous profitons de la célébration de notre 11e anniversaire pour vous fixer un nouveau rendez-vous,axé sur les tendances du digital et de la transformation du métier de l’assurance. "</p>
                        <a href="{{ asset('storage/livre_blanc/MyMemo_01.pdf') }}" download="Mymemo1" target="_blank" style="display:none" id="mymemo1"></a>
                        <iframe id="livre-blanc-tome1-landing" class="livre-blanc-tome1-landing" src="https://www.youtube.com/embed/Zj_0OtEr244?enablejsapi=1&mute=1&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        <p style="margin-top:20px">Troisième édition: {{$memos[0]->title}}</p>
                        <div id="submit-news-letter-bg" style="margin-bottom:20px">
                            <a href="{{ asset('storage/livre_blanc/WL_MV_livre_Blanc_Tome1_Optimise_'.app()->getLocale().'.pdf') }}" target="_blank" class="btn btn-primary downloadmemoLanding" data-id="{{$memos[0]->id}}" id="submit-news-letter" style="width: 250px !important;">
                                <span>
                                    <span id="text" class="justify-content-center">{{strtoupper(__('modalLivreBlanc.DOWNLOAD')) }} &nbsp; <i class="fas fa-download"></i></span>
                                </span>
                            </a>
                        </div>
                        <div style="display:flex;flex-direction:column;align-items:flex-start;margin:40px">
                            <h4 style="color:#fff">Editions précédentes</h4>
                            <?php for ($i = 1; $i < count($memos); $i++) : ?>

                                <a href="javascript:void(0)" class="downloadmemoLanding" data-id="{{$memos[$i]->id}}" data-title="{{$memos[$i]->title}}" style="color:#fff;text-align:left"><i class="fas fa-download" style="margin-right:10px"></i>{{$memos[$i]->title}}</a>


                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="col-12 text-center" id="form_mymemo_landing" style="display:none;min-height:400px">
                        <h4 style="color:#fff">Télécharger <span id="title_memo">{{$memos[0]->title}}</span></h4>
                        <p>{{ __('modalEbook.SUB_TITLE') }}</p>
                        <div class="col-12">
                            <div class="form-group" style="margin-bottom:20px">
                                <label for="nom" class="label-form">{{ __('modalEbook.YOUR_LAST_NAME') }} <span style="color:red">*</span></label>
                                <input type="text" name="nom" id="nom_mymemo_landing" placeholder="{{ __('modalEbook.LAST_NAME') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label-form">{{ __('modalEbook.YOUR_FIRST_NAME') }} <span style="color:red">*</span></label>
                                <input type="text" name="prenom" id="prenom_mymemo_landing" placeholder="{{ __('modalEbook.FIRST_NAME') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="label-form">{{ __('modalEbook.YOUR_EMAIL') }} <span style="color:red">*</span></label>
                                <input type="email" name="email" id="email_mymemo_landing" placeholder="{{ __('modalEbook.EMAIL') }}" required>
                            </div>
                            <input type="hidden" style="display:none" id="version" value="{{$memos[0]->id}}">

                            <div class="flex-item position-relative" style="z-index: 1000;" id="button_send_memo_landing">
                                <div id="submit-news-letter-bg">
                                    <a href="{{ asset('storage/livre_blanc/MyMemo_01.pdf') }}" download="Mymemo1" style="display:none" id="linkdownloadmymemotomeLanding1"></a>
                                    <button class="btn btn-primary downloadFormMymemoLanding" id="submit-news-letter" style="width: 250px !important;" data-url="{{ asset('storage/livre_blanc/MyMemo_01.pdf') }}"><span>
                                            <span id="text" class="justify-content-center">{{ __('modalEbook.SEND') }} &nbsp; <i class="fas fa-caret-right"></i></span></span></button>
                                </div>
                            </div>
                            <div id="loading_memo_landing" style="display:none">
                                <p style="color:#fff;font-weight:bold;">Veuillez patientez</p>

                                <img src="{{ asset('assets/img/green_loading.gif')}}" style="width:80px" />
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <!-- Partenaires END -->
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
<script>
    $(".downloadFormMymemoLanding").click(function(e) {

        

        if ($("#nom_mymemo_landing").val().length < 1) {
            alert("Le nom est obligatoire");
            return;
        }
        if ($("#prenom_mymemo_landing").val().length < 1) {
            alert("Le prénom est obligatoire");
            return;
        }

        if ($("#email_mymemo_landing").val().length < 1) {
            alert("L'email est obligatoire");
            return;
        }
        if (!ValidateEmail($("#email_mymemo_landing").val())) {
            alert("L'email est incorrent");
            return;
        }
 
        var form = new FormData();
        const that = this;
        form.append('_token', "{{csrf_token()}}");
        form.append('nom', $("#nom_mymemo_landing").val());
        form.append('prenom', $("#prenom_mymemo_landing").val());
        form.append('email', $("#email_mymemo_landing").val());
        form.append('version', $("#version").val());
        $("#loading_memo_landing").show();
        $("#button_send_memo_landing").hide();
        $.ajax({
            url: "{{url('/')}}/downloadMemoTome1",
            data: form,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data) {


                if (data.currentMemo) {
                    $("#linkdownloadmymemotomeLanding1").trigger('click');
                    download(data.currentMemo.filename, data.currentMemo.title)
                    console.log($("#linkdownloadmymemotomeLanding1"));
                    $("#loading_memo_landing").hide();
                    $("#form_mymemo_landing").hide();
                    $("#nom_mymemo_landing").val("")
                    $("#prenom_mymemo_landing").val("")
                    $("#email_mymemo_landing").val("")
                    $("#bonne_lecture").show();
                    $("html, body").animate({
                        scrollTop: $("#bonne_lecture").offset().top-200
                    }, "slow");
                    return false;
                } else alert("Une erreur s'est produite lors du téléchargement du livre blanc")
            }
        });
    });
    $(".downloadmemoLanding").click(function(e) {
        e.preventDefault();
        $("#video_mymemo_landing").hide();
        $("#form_mymemo_landing").show();
        $("#version").val($(this).data("id"));
        $("#title_memo").html($(this).data("title"))
        $('.livre-blanc-tome1-landing')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
        $('html,body').animate({
        scrollTop: $("#form_mymemo_landing").offset().top-200
    }, 'slow');
        //window.location.hash = '#form_mymemo_landing';
    });

    function download(filename, title) {
        var element = document.createElement('a');
        console.log(`{{ asset('storage/livre_blanc/${filename} ') }}`)
        element.setAttribute('href', `{{ asset('storage/livre_blanc/${filename} ') }}`);
        element.setAttribute('download', title);

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        document.body.removeChild(element);
    }
</script>
@endsection