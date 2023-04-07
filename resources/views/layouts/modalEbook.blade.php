<!--<a href="#" data-toggle="modal" data-target="#modalEbook">
    <div class="coeur-btn col-12" id="sousTrigger1">
        <img id="sousImg1" src="{{ asset('assets/img/sous-1.png')}}" title="Ebook" alt="">
    </div>
</a>-->

<!-- Modal Ebook-->
<div class="modal fade" id="modalEbook" tabindex="-1" role="dialog" aria-labelledby="modalEbook" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-modal" >{{ __('modalEbook.TITLE') }}</h5>
                <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" id="body_presentation">
                <div class="col-12 text-center">
                    <p>{{ __('modalEbook.SUB_TITLE') }}</p>
                    <div class="col-12">
                        <form action="{{url('/')}}/presentation" method="post" id="form_presentation">
                            {{csrf_field()}}

                            <div class="form-group" style="margin-bottom:20px">
                            <label for="nom" class="label-form">{{ __('modalEbook.YOUR_LAST_NAME') }} <span style="color:red">*</span></label>
                                <input type="text" name="nom" id="nom" placeholder="{{ __('modalEbook.LAST_NAME') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="label-form">{{ __('modalEbook.YOUR_FIRST_NAME') }} <span style="color:red">*</span></label>
                                <input type="text" name="prenom" id="prenom"  placeholder="{{ __('modalEbook.FIRST_NAME') }}" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="nom_entreprise" class="label-form">{{ __('modalEbook.COMP_NAME') }}</label>
                                <input type="text" name="nom_entreprise" id="nom_entreprise"  autocomplete="off"placeholder="{{ __('modalEbook.NAME_OF_COMP') }}">
                            </div>
                            <div class="form-group">
                                <label for="nom" class="label-form">{{ __('modalEbook.YOUR_EMAIL') }} <span style="color:red">*</span></label>
                                <input type="email" name="email" id="email" placeholder="{{ __('modalEbook.EMAIL') }}" required>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="version" type="radio" id="versionar" value="AR">
                                <label class="form-check-label" for="versionar">{{ __('modalEbook.AR_VERSION') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="version" type="radio" id="versionfr" value="FR" checked>
                                <label class="form-check-label" for="versionfr">{{ __('modalEbook.FR_VERSION') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="version" type="radio" id="versionen" value="EN">
                                <label class="form-check-label" for="versionen">{{ __('modalEbook.EN_VERSION') }}</label>
                            </div>
                            

                            <div class="flex-item position-relative" style="z-index: 1000;">
                            <div id="submit-news-letter-bg">

                            <button class="btn btn-primary" id="submit-news-letter" style="width: 250px !important;"><span>
                            <span id="text" class="justify-content-center">{{ __('modalEbook.SEND') }} &nbsp; <i class="fas fa-caret-right"></i></span></span></button>
                            </div>
                            </div>
                        </form>
                    </div>
        </div>
                    </div>
                </div>
                <!-- boutons Sous -->

            </div>

        </div>


<!-- Modal Simulation End-->
<script>
$("#form_presentation").submit(function(e){
    e.preventDefault();
    var form = $(this);
    var actionUrl = form.attr('action');
    $("#body_presentation")
    .html(`<p style="color:#fff;font-waight:bold">Veuillez patientez</p><img src="{{ asset('assets/img/green_loading.gif')}}" style="width:80px" />`);
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            if(data=="OK")
            $("#body_presentation")
            .html(`<div style="background: #fff;padding: 10px;border-radius: 20px;"><span style='color:#00225e;font-weight:bold;'>
            <i style="color:#00f179" class="fas fa-check"></i>` + "{{ __('modalEbook.SEND_SUCCESS') }}" + `</span></div>`);
            else alert("{{ __('modalEbook.SEND_ERROR_ALERT') }}");
        },
        error:function(error){
            $("#body_presentation").html(`<div style="background: #fff;padding: 10px;border-radius: 20px;"><span style='color:red;font-weight:bold;'>
            <i style="color:red" class="fas fa-times"></i>`+ "{{ __('modalEbook.SEND_ERROR') }}" + `</span></div>`);

        }
    })


})
</script>
