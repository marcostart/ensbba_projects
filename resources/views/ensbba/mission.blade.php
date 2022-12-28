@extends('layouts.page')
@section('style')
<style media="screen">
    .transparent{
        border-top: solid 2px rgba(0, 0, 0, 0.1);
        border-bottom: solid 2px rgba(0, 0, 0, 0.1);
        background-color: rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 5%;
    }
</style>
@endsection
@section('content')
<div class="transparent">
    <h4 style="font-weight: bold;text-align: center;margin:1px;">Mission et défis de l'ENSBBA</h4>
</div>
<div class="container" style="margin-bottom: 20%;">
    <div class="row">
        <div class="col-md-4">
            <img src="/images/study.png" alt="">
        </div>
        <div class="col-md-8">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Mission et défis</span>
                <span class=""><hr></span>
            </div>
            <div class="mt-4">
                ENSBBA a pour missions, la formation, la recherche pour le développement et le service à la société dans les domaines de l’éducation, de la santé, de l’industrie et du génie biologique. A ce titre, elle :
                <ul>
                    <li>Participe à une dynamique de formation professionnelle initiale et continue dans le domaine des biosciences et biotechnologies ;</li>
                    <li>Promeut au niveau national, régional et international la recherche pour le développement et le transfert de technologies dans les domaines des biotechnologies, la mobilisation des ressources et le renforcement des capacités ;</li>
                    <li>Assure une veille scientifique, technologique et biosécuritaire en rapport avec les biotechnologies et l’environnement ;</li>
                    <li>Développe des stratégies de valorisation de nos ressources génétiques au service de la santé et de l’alimentation à l’aide des outils biotechnologiques.</li>
                </ul>
                <div class="mt-2">
                    Dans le domaine de l’éducation, ENSBBA forme des cadres ayant un large spectre de connaissances et compétences reposant sur les biosciences et biotechnologies appliquées, leur permettant de trouver un emploi ou de s’auto-employer dans des secteurs variés que sont le biomédical, les industries pharmaceutiques et cosmétiques, la diététique alimentaire et la nutrition, la biotech­nologie, l’agroalimentaire, l’environnement et autres. Pour y parvenir, les activités académiques concernent :
                    <ul>
                        <li>les cours théoriques enseignés par vingt et un enseignants permanents de l’entité mais aussi des enseignants missionnaires et vacataires sollicités pour les spécialités non couvertes localement;</li>
                        <li>les Travaux dirigés;</li>
                        <li>les Travaux Pratiques et Sorties Pédagogiques;</li>
                        <li>les examens normaux et sessions de rattrapage du premier et du second semestre de l’année;</li>
                        <li>les stages d’immersion, de découverte et de fin de formation.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
