@extends('layouts/admin')

@section('content')
<div id="layoutTrainingUpdate">
    <div id="layoutTraining_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Modifier une formation</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('trainings.update', $training->id) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <span>Nom de la formation</span>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ $training->name }}" required autofocus />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <span>Description</span>
                                        <textarea id="description" class="form-control block w-full mt-1 rounded-md @error('description') is-invalid @enderror" name="description" required autofocus
                                        rows="3">{{ $training->description }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span>Image illustrative</span>
                                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image" />
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">Mettre à jour</button>
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

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ),{
            ckfinder: {
                uploadUrl: '{{route('articles.index').'?_token='.csrf_token()}}',
    }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
