@extends('layouts.page')

@section('style')
    <style>

    .ltl-underline{
        border-top: 3px solid var(--bs-primary);
        width: 50px
    }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                {{-- <div class="bg-white w-100 text-start mb-4">
                    <img src="{{ asset('assets/logo.png') }}" alt="" style="max-width: 100px">
                </div> --}}
                <div class="content">
                    <p style="text-align: justify">
                        <span class="fs-1"><strong>ENSBBA</strong></span> a été créée, sur les cendres de la FAST-CBG de Dassa-Zoumè, par arrêté ministériel N° 208-MESRS/DC/SGM/DGES/DAF/R-UNSTIM/CCJ/SA 028SGG18 du 17 avril 2018. L’entité est installée dans la Commune de Dassa-Zoumé, Arrondissement de Kpingni.
                    </p>
                    <p>
                        Elle se trouve au bord de la Route Nationale Inter-Etats N°2 (RNIE n°2), à près de deux kilomètres avant le carrefour de la ville, en partant de Paouignan vers Dassa. Elle est implantée du côté gauche de la voie, en face de l’Ecole Primaire Publique de Kpingni. L’administration de l’<strong>ENSBBA</strong> est implantée sur le site.
                    </p>


                </div>
                <div class="mb-3">
                    <div class="mapouter">
                        <div class="gmap_canvas d-flex">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=BP%2014,%20Dassa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <style>.mapouter{position:relative;text-align:right;width:100%;}</style>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;width:100%;}</style>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mb-4">
                    <div class="title d-flex flex-column">
                        <span class="fs-1">Contactez-nous</span>
                        <div class="ltl-underline"></div>
                    </div>
                </div>
                <form action="#">
                    <div class="mb-3">
                        <label for="email" class="form-label">Nom & Prénom</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea class="form-control" placeholder="" id="message" style="height: 200px"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
