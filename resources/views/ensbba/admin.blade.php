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
    <h4 style="font-weight: bold;text-align: center;margin:1px;">Administration de l'ENSBBA</h4>
</div>
<div class="" style="width:100%; background-color: white;padding-top: 5%;padding-bottom: 5%;">
    <div class="container" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/study.png" alt="">
            </div>
            <div class="col-md-8">
                <div style="color: #3b7ddd;">
                    <span class="text-uppercase h4 fw-bold">Administration de l'ENSBBA</span>
                    <span class=""><hr></span>
                </div>
                <div class="content mt-4">
                    L'ENSBBA est organisé selon l'organigramme ci-dessous qui révèle les différents services ratachés au Directeur et à son Adjoint.
                    Le personnel administratif compte actuellement onze (11) membres.
                    <div class="" style="margin-top: 2%;">
                        <img src="/images/admin.jpg" alt="" width="90%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
