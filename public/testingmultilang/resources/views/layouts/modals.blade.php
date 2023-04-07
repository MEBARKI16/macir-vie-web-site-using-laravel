<a href="#" data-toggle="modal" data-target="#modalSimulation">
    <div class="coeur-btn col-12" id="sousTrigger1">
        <img id="sousImg1" src="{{ asset('assets/img/sous-1.png')}}" title="{{ __('welcome.SIMULATION')}}" alt="">
    </div>
</a>

<!-- Modal Simulation-->
<div class="modal fade" id="modalSimulation" tabindex="-1" role="dialog" aria-labelledby="modalSimulation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSimulationTitle">{{ __('welcome.SIMULATION')}}</h5>
                <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{__('modals.PARAGRAPHE3')}}</p>

                <!-- boutons Sous -->

                <div class="row" id="souscription-buttons-modal">

                    <div class="col" id="souscription-buttons-content-modal">
                        <div class="row">
                            <a href="{{url('/')}}/mym/#/simulation-assurance-voyage" id="link_img_modal">
                                <img class="row souscription-modal" src="{{ asset('assets/img/sous-voyage.png')}}" alt="">
                            </a>
                        </div>
                        <div class="row">
                            <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{url('/')}}/mym/#/simulation-assurance-voyage">
                                <p>{{__('welcome.SIMULATION')}} <br> {{__('welcome.MYM_VYG')}}</p>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="col" id="souscription-buttons-content-modal">
                <div class="row">
                  <a href="{{url('/')}}/mym/#/simulation-tabibou-home"  id="link_img_modal">
                    <img class="row souscription-modal" src="{{ asset('assets/img/sous-tabibou.png')}}">
                    </a>
                </div>
                <div class="row">
                    <img class="row underline" src="{{ asset('assets/img/Line-pink.png')}}">
                </div>
                <div class="row justify-content-center">
                    <a href="{{url('/')}}/mym/#/simulation-tabibou-home">
                        <p>{{__('welcome.SIMULATION')}} <br> {{__('welcome.MYM_ACC')}}</p>
                    </a>
                </div>
            </div> --}}

            <div class="col" id="souscription-buttons-content-modal">
                <div class="row">
                    <a href="{{url('/')}}/mym/#/simulation-individuelle-accident" id="link_img_modal">
                        <img class="row souscription-modal" src="{{ asset('assets/img/sous-acc-vie.png')}}">
                    </a>
                </div>
                <div class="row">
                    <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                </div>
                <div class="row justify-content-center">
                    <a href="{{url('/')}}/mym/#/simulation-individuelle-accident">
                        <p>{{__('welcome.SIMULATION')}} <br> {{__('welcome.MYM_ACC')}}</p>
                    </a>
                </div>
            </div>

        </div>

        <!-- End Boutons Sous -->

    </div>
</div>
</div>
</div>
<!-- Modal Simulation End-->


<a href="#" data-toggle="modal" data-target="#modalSouscription">
    <div class="coeur-btn-2 col-12" id="sousTrigger2">
        <img id="sousImg2" src="{{ asset('assets/img/sous-2.png')}}" title="{{ __('welcome.SOUSCRIPTION')}}" alt="">
    </div>
</a>


<!-- Modal Souscription-->
<div class="modal fade" id="modalSouscription" tabindex="-1" role="dialog" aria-labelledby="modalSouscription" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSimulationTitle">{{ __('welcome.SOUSCRIPTION')}}</h5>
                <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{__('modals.PARAGRAPH1')}} <br> {{__('modals.PARAGRAPH2')}}</p>

                <!-- boutons Sous -->

                <div class="row" id="souscription-buttons-modal">
                    <div class="col-2"></div>

                    <div class="col-8" id="souscription-buttons-content-modal">
                        <div class="row">
                            <a href="{{url('/mym/#/souscription-assurance-voyage')}}" id="link_img_modal">
                                <img class="row souscription-modal" src="{{ asset('assets/img/sous-voyage.png')}}">
                            </a>
                        </div>
                        <div class="row">
                            <img class="row underline" src="{{ asset('assets/img/Line-green.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{url('/mym/#/souscription-assurance-voyage')}}">
                                <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_VYG')}}</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <!-- <div class="col" id="souscription-buttons-content-modal">
                        <div class="row">
                            <a href="{{url('/mym/#/souscription-protection-accidents')}}" id="link_img_modal">
                                <img class="row souscription-modal" src="{{ asset('assets/img/sous-acc-vie.png')}}">
                            </a>
                        </div>
                        <div class="row">
                            <img class="row underline" src="{{ asset('assets/img/Line-orange.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{url('/mym/#/souscription-protection-accidents')}}">
                                <p>{{__('welcome.SOUSCRIPTION')}} <br> {{__('welcome.MYM_ACC')}}</p>
                            </a>
                        </div> -->
                    </div>

                </div>

                <!-- End Boutons Sous -->

            </div>
        </div>
    </div>
</div>
<!-- Modal Souscription End-->
