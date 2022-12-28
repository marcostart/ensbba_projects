@extends('layouts.page')

@section('style')
<style>
    .head{
        background-color: #ddfdda;
    }
    .ltl-underline{
        border-top: 3px solid var(--bs-primary);
        width: 50px
    }

    .f-nav{
        background-color: #3ea3d1
    }

    .f-nav a{
        color: white;
        text-decoration: none;
    }

    .f-nav li{
        padding: 10px;
        min-width: 200px;
        text-align: center
    }

    .f-nav li.active a{
        background-color: white;
        color: black;
        text-decoration: none;
        padding: 8px 50px;
    }
</style>
@endsection

@section('content')
    <div class="head mb-4 pt-3">
        <div class="container">
            <div class="title d-flex align-items-center flex-column">
                <span class="fs-1 fw-bold text-uppercase">présentation de l'enseignant</span>
                <div class="ltl-underline"></div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="rounded-circle w-75 p-2" style="">
                        <img src="{{"/images/directrice.jpg"}}" alt="" class="rounded-circle w-100" style="border: 5px solid var(--bs-primary);">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 d-flex flex-column justify-content-center">
                    <div class="fs-3">
                        <span class="fw-bold">Prénoms et nom : </span>
                        <span>Yêyinou Laura Estelle LOKO épouse KONE</span>
                    </div>
                    <div class="fs-3">
                        <span class="fw-bold">Grade : </span>
                        <span>Maitre de Conférences</span>
                    </div>
                    <div class="fs-3">
                        <span class="fw-bold">Titre : </span>
                        <span>Enseignante-Chercheure</span>
                    </div>
                    <div class="fs-3">
                        <span>Lien vers la page de publications scientifiques sur <a href="#" class="fw-bold">unstim.bj</a></span>
                    </div>
                    <div class="fs-3">
                        <span class="fw-bold">Autres liens</span>
                        <br>
                        <span><a href="https://orcid.org/my-orcid?orcid=0000-0002-7310-1334" class="text-black">https://orcid.org/my-orcid?orcid=0000-0002-7310-1334</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-nav mt-4">
            <ul class="nav justify-content-evenly" style="list-style: none">
                <li class="active">
                    <a href="#biographie">Biographie</a>
                </li>
                <li>
                    <a href="#act-academique">Activités académiques</a>
                </li>
                <li>
                    <a href="#recherche">Recherche</a>
                </li>
                <li>
                    <a href="#encadrement">Encadrements</a>
                </li>
                <li>
                    <a href="#pub-scientifique">Publication scientifique</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container nav-content">
        <div id="biographie">
            <div class="my-4">
                <div class="fs-3 mb-4">
                    <span class="fw-bold">Thème de recherche : </span>
                    <span>Développement de méthodes de lutte innovatives, respectueuse de la santé humaine et de l’environnement dans la protection des cultures contre les bioagresseurs.</span>
                </div>
                <div class="fs-3 mb-4">
                    <span class="fw-bold">Laboratoire (s) : </span>
                    <span>Laboratoire d’Entomologie Appliquée (LEnA)</span>
                </div>
                <div class="fs-3 mb-4">
                    <span class="fw-bold">Distinction : </span>
                    <p>
                        <span class="fw-bold">2020 :</span> Lauréate de l’initiative One Planet Fellowship de l’African Women in Agricultural Research and Development (AWARD), la Fondation Bill & Melinda Gates (BMGF), la Fondation BNP Paribas en France, l’Union européenne, le Centre de recherches pour le développement international (CRDI) du Canada et Agropolis Fondation (France).
                        <br>
                        <span class="fw-bold">2014 :</span> Lauréate des Bourses régionales l’Oréal-Unesco pour les femmes en Sciences d’Afrique Sub-Saharienne.
                    </p>
                </div>
                <div class="fs-3 mb-4">
                    <span class="fw-bold">Collaborateurs : </span>
                    <p></p>
                </div>
                <div class="fs-3 mb-4">
                    <span class="fw-bold">Appartenance aux associations professionnelles</span>
                    <br>
                    <p>
                        -	Académie Africaine des Sciences (AAS) <br>
                        -	Académie des Jeunes Scientifiques du Bénin (AJSB) <br>
                        -	Société Entomologique de la République du Bénin (SERB) <br>
                        -	Association Africaine des Entomologistes (AAIS) <br>
                        -	Association des Femmes pour l’Education, la Formation et la Recherche Scientifique au Bénin (AFEFRS-Benin) <br>
                        -	Organisation des Femmes scientifiques pour le monde en développement (OWSD) <br>
                        -	Benin Women For Science (BW4S) <br>

                        <a href="https://orcid.org/my-orcid?orcid=0000-0002-7310-1334" class="text-black">https://orcid.org/my-orcid?orcid=0000-0002-7310-1334</a> <br>
                        <a href="https://scholar.google.fr/citations?user=rVKxOpwAAAAJ&hl=fr" class="text-black">https://scholar.google.fr/citations?user=rVKxOpwAAAAJ&hl=fr</a> <br>
                        <a href="https://www.researchgate.net/profile/Laura-Loko" class="text-black">https://www.researchgate.net/profile/Laura-Loko</a> <br>
                        <a href="https://www.webofscience.com/wos/author/record/43188" class="text-black">https://www.webofscience.com/wos/author/record/43188</a> <br>
                        <a href="https://www.linkedin.com/in/laura-loko-ab897887/" class="text-black">https://www.linkedin.com/in/laura-loko-ab897887/</a> <br>
                        <a href="https://www.aasciences.africa/affiliate/loko-yeyinou-laura-estelle" class="text-black">https://www.aasciences.africa/affiliate/loko-yeyinou-laura-estelle</a> <br>
                        <a href="https://www.adscientificindex.com/scientist/loko-yeyinou-laura-estelle/101576" class="text-black">https://www.adscientificindex.com/scientist/loko-yeyinou-laura-estelle/101576</a>
                    </p>
                </div>
            </div>
        </div>
        <div id="act-academique" style="display: none">
            Activité académique
        </div>
        <div id="recherche" style="display: none">
            Recherche
        </div>
        <div id="encadrement" style="display: none">
            Encadrement
        </div>
        <div id="pub-scientifique" style="display: none">
            Publication scientifique
        </div>
    </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
    $(".f-nav a").on('click', function (e) {
        $(".nav-content").children().each(function (index, child) {
            $(child).hide()
        })
        $(".f-nav li.active").removeClass("active")
        $(e.target).parent().addClass("active")
        $(e.target.getAttribute("href")).show()
    })
</script>
@endsection
