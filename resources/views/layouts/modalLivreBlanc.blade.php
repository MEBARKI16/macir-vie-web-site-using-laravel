<!-- Modal Ebook-->
<div class="modal fade" id="modalLivreBlanc" tabindex="-1" role="dialog" aria-labelledby="modalLivreBlanc" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-modal">{{ __('modalLivreBlanc.TITLE') }}</h5>
                <button type="button" id="closeModalLivreBlanc" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
    right: 10px;">
                    <span aria-hidden="true" style="color:#fff">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id="body_presentation">

                <div class="col-12 text-center" id="video_mymemo">
                    <p style="color:#fff;text-align:center">" Parce que nous voulons toujours être innovants et utiles, nous profitons de la célébration de notre 11e anniversaire pour vous fixer un nouveau rendez-vous,axé sur les tendances du digital et de la transformation du métier de l’assurance. "</p>
                    <iframe id="livre-blanc-tome1" class="livre-blanc-tome1" height="300" src="" data-src="https://www.youtube.com/embed/Zj_0OtEr244?enablejsapi=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <div id="submit-news-letter-bg" style="margin-bottom:20px">
                        <a href="{{ asset('storage/livre_blanc/WL_MV_livre_Blanc_Tome1_Optimise_'.app()->getLocale().'.pdf') }}" target="_blank" class="btn btn-primary downloadmemo" id="submit-news-letter" style="width: 250px !important;">
                            <span>
                                <span id="text" class="justify-content-center">{{strtoupper(__('modalLivreBlanc.DOWNLOAD')) }} &nbsp; <i class="fas fa-caret-down"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 text-center" id="form_mymemo" style="display:none">
                    <p>{{ __('modalEbook.SUB_TITLE') }}</p>
                    <div class="col-12">
                        <div class="form-group" style="margin-bottom:20px">
                            <label for="nom" class="label-form">{{ __('modalEbook.YOUR_LAST_NAME') }} <span style="color:red">*</span></label>
                            <input type="text" name="nom" id="nom_mymemo" placeholder="{{ __('modalEbook.LAST_NAME') }}" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="label-form">{{ __('modalEbook.YOUR_FIRST_NAME') }} <span style="color:red">*</span></label>
                            <input type="text" name="prenom" id="prenom_mymemo" placeholder="{{ __('modalEbook.FIRST_NAME') }}" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="label-form">{{ __('modalEbook.YOUR_EMAIL') }} <span style="color:red">*</span></label>
                            <input type="email" name="email" id="email_mymemo" placeholder="{{ __('modalEbook.EMAIL') }}" required>
                        </div>


                        <div class="flex-item position-relative" style="z-index: 1000;" id="button_send_memo">
                            <div id="submit-news-letter-bg">
                                <a href="{{ asset('storage/livre_blanc/MyMemo_05.pdf') }}" target="_blank" style="display:none" id="linkdownloadmymemotome1"></a>
                                <button class="btn btn-primary downloadFormMymemo" id="submit-news-letter" style="width: 250px !important;" data-title="L'ère des drones et l'émergence des machines" data-url="{{ asset('storage/livre_blanc/MyMemo_05.pdf') }}"><span>
                                        <span id="text" class="justify-content-center">{{ __('modalEbook.SEND') }} &nbsp; <i class="fas fa-caret-right"></i></span></span></button>
                            </div>
                        </div>
                        <div id="loading_memo" style="display:none">
                            <p style="color:#fff;font-weight:bold;">Veuillez patientez</p>
                            <img src="{{ asset('assets/img/green_loading.gif')}}" style="width:80px" />
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

</div>

<script>
    $(".downloadFormMymemo").click(function(e) {



        if ($("#nom_mymemo").val().length < 1) {
            alert("Le nom est obligatoire");
            return;
        }
        if ($("#prenom_mymemo").val().length < 1) {
            alert("Le prénom est obligatoire");
            return;
        }
        if ($("#email_mymemo").val().length < 1) {
            alert("L'email est obligatoire");
            return;
        }
        var form = new FormData();
        const that = this;
        form.append('_token', "{{csrf_token()}}");
        form.append('nom', $("#nom_mymemo").val());
        form.append('prenom', $("#prenom_mymemo").val());
        form.append('email', $("#email_mymemo").val());
        form.append('version', "5");
        $("#loading_memo").show();
        $("#button_send_memo").hide();
        $.ajax({
            url: "{{url('/')}}/downloadMemo",
            data: form,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(data) {
                if (data.currentMemo) {
                    /*window.location = $(that).data("url");
                    const a = document.createElement('a')
                    a.href = url
                    a.download = url.split('/').pop()
                    document.body.appendChild(a)
                    a.click()
                    document.body.removeChild(a)*/
                    var element = document.createElement('a');
                    element.setAttribute('href', $(that).data("url"));
                    element.setAttribute('download', $(that).data("title"));

                    element.style.display = 'none';
                    document.body.appendChild(element);

                    element.click();

                    document.body.removeChild(element);
                    $("#loading_memo").hide();
                    $("#button_send_memo").show();
                    $("#video_mymemo").show();
                    $("#form_mymemo").hide();
                    $('#modalLivreBlanc').modal('toggle');
                    $("#nom_mymemo").val("")
                    $("#prenom_mymemo").val("")
                    $("#email_mymemo").val("")
                } else alert("Une erreur s'est produite lors du téléchargement du livre blanc")
            }
        });
    })
</script>