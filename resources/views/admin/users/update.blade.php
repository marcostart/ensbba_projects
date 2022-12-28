@extends('layouts/admin')

@section('content')
<div id="layoutUserUpdate">
    <div id="layoutUser_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Modifier un utilisateur</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('users.update', $user->id) }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="John Doe" name = "name" value="{{ $user->name }}" required/>
                                        <label for="name">Nom complet</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="nom@example.com" name="email" value="{{ $user->email }}" required/>
                                        <label for="email">Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Mot de passe"/>
                                        <label for="password">Mot de passe</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" id="admin" role="switch" type="checkbox" name="admin" />
                                        <label class="form-check-label" for="admin">Administrateur</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit" >Mettre à jour</button>
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