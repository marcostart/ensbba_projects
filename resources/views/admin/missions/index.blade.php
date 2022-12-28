@extends('layouts/admin')

@section('content')
<div id="layoutMission">
    <div id="layoutMission_">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div id="missions">
                        <div class="container">
                            <div class="d-flex align-items-center flex-column">
                                <h3 class="fw-bold">Vision et mission de l'ENSBBA</h3>
                                <span class="underline"></span>
                                <p class="mt-2">{{ $missions-> vision}}</p>
                            </div>
                            <div class="row my-4">
                                <div class="col-12 mt-4">
                                    <div class="card rounded-0">
                                        <div class="row p-2">
                                            
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-xs-10 col-lg-6">
                                                <video class="w-100" autoplay loop muted >
                                                    <source src="{{ url('storage/missions/videos/'.$missions->video) }}" type="video/mp4" />
                                                  </video>            
                                            </div>
                                            <div class="col-xs-12 col-lg-6">
                                                <img src="{{ url('storage/missions/'.$missions->image) }}" alt="" class="w-100 h-100 shadow">
                                            </div>
                                            <div class="col-xs-12 col-lg-6 text-area">
                                                <p>
                                                    {{ $missions-> missions}}
                                                </p>
                                                
        
                                                <div class="d-flex w-100 mt-4 justify-content-evenly">
                                                    <a href="#" class="btn btn-primary rounded-pill">
                                                        Lire la suite
                                                        <i class="fa fa-arrow-right"></i>
                                                    </a>
        
                                                    <a href="#" class="btn btn-primary rounded-pill">
                                                        Jouer la vidéo
                                                        <i class="fa fa-video"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@section('script')

@endsection
