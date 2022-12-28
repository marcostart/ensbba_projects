@extends('layouts.page')
@section('content')
<div id="top-slider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('{{$slider ? 'storage/sliders/'.$slider->image : ''}}'); background-size: cover;">
        <div class="content">
        </div>
        <div class="carousel-caption text-start">
            <span class="fs-1" style="font-size: 70px">{{$slider ? $slider->title : "Titre"}}</span>
            <p class="fs-5">
                {{$slider ? $slider->content : "Description"}}
            </p>
            <a href="{{ route('directrice-welcome', []) }}">
                <button class="btn" style="white-space: nowrap">
                    Mot de bienvenue de la Directrice
                </button>
            </a>
        </div>
      </div>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
</div>

<div id="news">
    <div class="container">
        <div class="d-flex align-items-center flex-column">
            <h3 class="fw-bold">Les dernières nouvelles de l'ENSBBA</h3>
            <span class="underline"></span>
        </div>

        <div class="row my-4">
            @forelse ($articles as $article)
            <div class="col-md-4 col-sm-12 mt-4 ">
                <div class="card h-100 border-0 shadow rounded-0">
                    <div class=" p-3" style="width: 100%; height: 300px;">
                        <div class="w-100 h-100" style="background-image: url('{{'storage/articles/'.$article->image}}'); background-size: cover; ">

                        </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-primary">{{ $article->title}}</h5>
                      <div>
                        @php
                        if (strlen($article->content) > 250) {
                            echo(Str::substr($article->content, 0, 250).'...');
                        }else{
                            echo(Str::substr($article->content, 0, 250));
                        }
                        @endphp
                      </div>
                    </div>
                    <div class="p-3">
                        <p class="card-underline w-100"></p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-4">Lire la suite <i class="fw-bold fa fa-arrow-right"></i> </a>
                    </div>
                  </div>
            </div>
            @empty
                <div class="col-12">
                    <p class="text-center fs-2">
                        Pas d'article
                    </p>
                </div>
            @endforelse

        </div>
        <!-- <div class="d-flex my-4 justify-content-center">
            <a href="#" class="btn btn-primary" style="min-width: 150px">
                <i class="fa fa-plus"></i>
                Voir plus
            </a>
        </div> -->
    </div>
</div>

<div id="formations">
    <div class="container">
        <div class="d-flex align-items-center flex-column">
            <h3 class="fw-bold">Les formations universitaires à l'ENSBBA</h3>
            <span class="underline"></span>
            <p class="mt-2">Découvrez brièvement toutes les formations de l'ENSBBA et les ressources pédagogiques d'accompagnement</p>
        </div>


        <div class="row my-4">
            @forelse ($trainings as $training)
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="card h-100 border-0 shadow rounded-4 bg-secondary text-white">
                    <div class="d-flex m-3">
                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="min-width: 100px; height: 100px;">
                            <img src="{{'storage/trainings/'.$training->image}}" class="rounded-circle" alt="">
                        </div>
                        <div class="ms-3 d-flex align-items-center">
                            <span class="h4">
                                {{$training->name}}
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                      <p class="card-text">{{$training->description}}</p>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center fs-2">
                    Pas de formation
                </p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<div id="conditions">
    <div class="container">
        <div class="d-flex align-items-center flex-column">
            <h3 class="fw-bold">Rejoindre l'ENSBBA</h3>
            <span class="underline"></span>
            <p class="mt-2">Découvrez les conditions d'admission à l'ENSBBA et de partenariat avec les équipes de recherche!</p>
        </div>


        <div class="row my-4">
            @forelse ($conditions as $condition)
            <div class="col-md-6 col-sm-12 mt-4">
                <div class="card border-0 rounded-0 shadow" style="height: 100% !important;">
                    <div class="row p-3 align-items-center">
                        <div class="col-xs-12 col-md-4">
                            <img src="{{ url('storage/conditions/'.$condition->image) }}" alt="" class="w-100 h-100">
                        </div>
                        <div class="col-xs-12 col-lg-8">
                            <span class="h3 title">
                                {{$condition->title}}
                            </span>
                            <p class="mt-4">
                                {{$condition->content}}
                            </p>
                        </div>
                    </div>
                  </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center fs-2">
                    Conditions d'admission non fournies
                </p>
            </div>
            @endforelse
        </div>
        <!-- <div class="d-flex my-4 justify-content-center">
            <a href="#" class="btn btn-primary" style="min-width: 150px">
                <i class="fa fa-plus"></i>
                Voir plus
            </a>
        </div> -->
    </div>
</div>

<div id="missions">
    <div class="container">
        <div class="d-flex align-items-center flex-column">
            <h3 class="fw-bold">Mission et défis de l'ENSBBA</h3>
            <span class="underline"></span>
            <p class="mt-2">Une école de référence ayant pour leitmotiv " Science et Technnologie au service de l'homme "</p>
        </div>


        <div class="row my-4">
            <div class="col-12 mt-4">
                <div class="card rounded-0">
                    <div class="row p-2">
                        <div class="col-xs-12 col-lg-6">
                            <img src="{{'storage/missions/'.$mission->image}}" alt="" class="w-100 h-100 shadow">
                        </div>
                        <div class="col-xs-12 col-lg-6 text-area">
                            <p>
                                ENSBBA a pour missions, la formation, la recherche pour le développement et le service à la société dans les domaines de l’éducation, de la santé, de l’industrie et du génie biologique.
                            </p>
                            <p class="mt-4">
                                A ce titre, elle forme des techniciens supérieurs compétents répondant aux besoins des laboratoires et aux industries.
                            </p>

                            <div class="row w-100 mt-4">
                                <div class="col-md-6 col-sm-12 mt-4 d-flex justify-content-center">
                                    <a href="{{route('mission')}}" class="btn btn-primary rounded-pill w-100" style="white-space: nowrap">
                                        Lire la suite
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="col-md-6 col-sm-12 mt-4 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary rounded-pill w-100" style="white-space: nowrap">
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

<div id="partners">
    <div class="container">
        <div class="d-flex align-items-center flex-column">
            <h3 class="fw-bold">Les partenaires de l'ENSBBA</h3>
            <span class="underline"></span>
            <p class="mt-2">Le réseau de partenaire de L'ENSBBA s'élargit chaque année. Soyez le prochain partenaire!</p>
        </div>

        <div id="recipeCarousel" class="carousel slide row" data-bs-ride="carousel">
            <div class="col-1">
                <a class="carousel-control-prev bg-transparent" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-10">
                <div class="carousel-inner" role="listbox">
                    @foreach ($partners as $partner)
                    <div class="carousel-item justify-content-center {{ $loop->first ?  'active' : '' }}">
                        <div class="text-center">
                            <img src="{{ url('storage/partners/'.$partner->logo) }}" class="img-fluid" style="max-width: 270px">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-1">
                <a class="carousel-control-next bg-transparent" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        let items = document.querySelectorAll('#partners .carousel .carousel-item')
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

    </script>
@endsection
