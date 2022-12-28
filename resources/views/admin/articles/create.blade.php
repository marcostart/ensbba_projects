@extends('layouts/admin')

@section('content')
<div id="layoutArticleCreate">
    <div id="layoutArticle_create">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Créer un articler</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('articles.create') }}" >
                                    @csrf
                                    <div class="mb-3">
                                        <span>Image de couverture</span>
                                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image" value="{{ old('image') }}" required autofocus />
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <span>Titre</span>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" placeholder="Titre de l'article..." name="title" value="{{ old('title') }}" required autofocus/>
                                        
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <span>Contenu</span>
                                        <textarea id="content" class="form-control block w-full mt-1 rounded-md @error('content') is-invalid @enderror" name="content" required autofocus
                                        rows="3"> {{ old('content') }}</textarea>
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">Publier</button>
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
                removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
            })
            .catch( error => {
                console.error( error );
        } );
    </script>
@endsection
