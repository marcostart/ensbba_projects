@extends('layouts/admin')

@section('content')
<div id="layoutPartnerUpdate">
    <div id="layoutPartner_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Modifier un partenaire</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('partners.update', $partner->id) }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <span>Nom du partenaire</span>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ $partner->name }}" required autofocus />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span>Logo</span>
                                        <input class="form-control @error('logo') is-invalid @enderror" id="logo" type="file" name="logo" value="{{ $partner->logo }}" />
                                        @error('logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">Mise à jour</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
