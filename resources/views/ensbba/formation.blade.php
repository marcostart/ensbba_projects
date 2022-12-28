@extends('layouts.page')
@section('style')
<style media="screen">
    .transparent{
        border-top: solid 2px rgba(0, 0, 0, 0.1);
        border-bottom: solid 2px rgba(0, 0, 0, 0.1);
        background-color: rgba(0, 0, 0, 0.1);
        padding: 15px;
        margin-bottom: 0%;
    }
</style>
@endsection
@section('content')
<div class="transparent">
    <h4 style="font-weight: bold;text-align: center;margin:1px;">Formation à l'ENSBBA</h4>
</div>
<div class="" style="width:100%; background-color: white;padding-top: 5%;padding-bottom: 5%;">
    <div class="container" style="margin-bottom: 15%;">
        <div class="row">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Biotechnologie Médicale</span>
                <span class=""><hr></span>
            </div>
            <div class="col-md-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center" style="">
                    <img src="/images/formation/biotechnologie_bg.jpg" alt="" width="115px" height="115px" style="border: solid 1px #3b7ddd;padding: 15px;" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-9">
                <div class="">
                    Les sept compétences que cette filière vise à développer chez l’apprenant sont :
                    <ul>
                        <li>Mettre en œuvre les techniques de prélèvement et de traitement des échantillons biologiques.</li>
                        <li>Mettre en œuvre les techniques appliquées aux examens de biologie médicale, d’anatomie et cytologie pathologiques et des activités biologiques à visée thérapeutique</li>
                        <li>Analyser et traiter les résultats des examens de biologie médicale et des activités biologiques à visée thérapeutique.</li>
                        <li>Gérer les équipements, matériels, consommables, réactifs et les stocks de produits et d’échantillons biologiques</li>
                        <li>Mettre en œuvre les normes et principes de qualité, d’hygiène, de sécurité et de déontologie pour assurer la qualité des activités.</li>
                        <li>Mettre en œuvre des protocoles de recherche fondamentale ou clinique.</li>
                        <li>Maîtriser l’utilisation des TIC et outils de collecte des données mobiles et de manipulation des données.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%;">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Biotechnologie Pharmaceutique</span>
                <span class=""><hr></span>
            </div>
            <div class="col-md-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center" style="">
                    <img src="/images/formation/biotechnologie-pharmaceutique_bg.jpg" alt="" width="115px" height="115px" style="border: solid 1px #3b7ddd;padding: 15px;" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <div class="">
                    Cette filière vise à développer les six compétences ci-après chez l’apprenant :
                    <ul>
                        <li>Proposer une réponse appropriée à un problème d’amélioration des médicaments traditionnels à partir d’une démarche scientifique et d’outils adéquats;</li>
                        <li>Proposer des formulations de médicaments traditionnels améliorés (MTA) et produits cosmétiques;</li>
                        <li>Identifier et maîtriser les principales techniques du contrôle de qualité appliquée aux médicaments biologiques et biotechnologiques y compris les MTA et produits cosmétiques;</li>
                        <li>Maîtriser la démarche de développement, qualification et validation, en vue de l’enregistrement des produits de santé;</li>
                        <li>Développer les capacités d’innovation face aux enjeux des entreprises de biotechnologies pharmaceutiques.</li>
                        <li>Maîtriser l’utilisation des TIC et outils de collecte des données mobiles et de manipulation des données.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%;">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Génétique, Biotechnologie et Applications</span>
                <span class=""><hr></span>
            </div>
            <div class="col-md-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center" style="">
                    <img src="/images/formation/genetique_bg.jpg" alt="" width="115px" height="115px" style="border: solid 1px #3b7ddd;padding: 15px;" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <div class="">
                    Les compétences à acquérir par l’apprenant sont :
                    <ul>
                        <li>Diagnostiquer les problèmes d’ordre génétique chez le vivant et y apporter des essais de solutions;</li>
                        <li>Maîtriser les techniques d’identification moléculaire des microorganismes ;</li>
                        <li>Sélectionner, créer et multiplier des variétés et races avec des outils biotechnologiques;</li>
                        <li>Maîtriser les techniques du Génie Génétique pour répondre aux besoins de la population dans le domaine de la santé, agriculture, environnement, l’agroalimentaire etc.</li>
                        <li>Maitriser l’utilisation des TIC et outils de collectes des données mobiles et de manipulation des données.</li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%;">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Diététique des Aliments et Nutrition</span>
                <span class=""><hr></span>
            </div>
            <div class="col-md-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center" style="">
                    <img src="/images/formation/dietetique_bg.jpg" alt="" width="115px" height="115px" style="border: solid 1px #3b7ddd;padding: 15px;" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <div class="">
                    Les six (6) compétences professionnelles liées à l’exercice de ce métier sont :
                    <ul>
                        <li>Développer un soin nutritionnel préventif, éducatif et thérapeutique individuel ou auprès d’un groupe de personnes;</li>
                        <li>Construire et animer une éducation thérapeutique nutritionnelle (ETN) individuelle ou de groupe;</li>
                        <li>Garantir les apports nutritionnels et veiller à la qualité de l’alimentation au niveau de la restauration collective ou de l’industrie agro-alimentaire;</li>
                        <li>Assurer la veille réglementaire et scientifique dans le champ de l’alimentation et de la nutrition humaine;</li>
                        <li>Participer à des programmes d’études et de recherche clinique dans le champ de l’alimentation et de la nutrition humaine;</li>
                        <li>Maîtriser l’utilisation des TIC et outils de collette des données mobiles et de manipulation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2%;">
            <div style="color: #3b7ddd;">
                <span class="text-uppercase h4 fw-bold">Génie Biologique et Bioprocédés</span>
                <span class=""><hr></span>
            </div>
            <div class="col-md-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center" style="">
                    <img src="/images/formation/genie-biologique_bg.jpg" alt="" width="115px" height="115px" style="border: solid 1px #3b7ddd;padding: 15px;" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <div class="">
                    Cette formation vise à développer les compétences ci-après chez l’apprenant :
                    <ul>
                        <li>Maitriser les techniques et méthodologies nécessaires à la pratique du laboratoire des sciences biologiques;</li>
                        <li>Développer des actions de protection et de régénération de l’environnement;</li>
                        <li>Définir et mettre en œuvre des essais réels et simulés;</li>
                        <li>Concevoir et mettre en place des procédés éco-compatibles pour la production et le traitement des matières premières (ressources animales et végétales);</li>
                        <li>Evaluer la performance d’une unité de bio-production et piloter les actions d’amélioration des performances;</li>
                        <li>Maitriser l’utilisation des TIC et outils de collecte des données mobiles et de manipulation des données</li>
                        <li>Maîtriser l'anglais</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
