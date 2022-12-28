@extends('layouts/admin')

@section('content')
<div id="layoutConditionUpdate">
    <div id="layoutCondition_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Modifier une condition d'admission</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('conditions.update', $condition->id) }}" >
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <span>Titre</span>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" name="title" value="{{ $condition->title }}" required autofocus/>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <span>Description</span>
                                        <textarea id="description" class="form-control block w-full mt-1 rounded-md @error('description') is-invalid @enderror" name="description" required autofocus
                                        rows="3"> {{ $condition->content }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span>Image d'illustration</span>
                                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image" value="{{ old('image') }}" />
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
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
