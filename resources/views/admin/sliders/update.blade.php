@extends('layouts/admin')

@section('content')
<div id="layoutSliderUpdate">
    <div id="layoutSlider_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Modifier un slider</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('sliders.update', $slider->id) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <span>Image de couverture</span>
                                        <input class="form-control @error('image') is-invalid @enderror"  id="image" type="file" name="image" />
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <span>Titre</span>
                                        <input class="form-control @error('title') is-invalid @enderror""  id="title" type="text" name="title" required value="{{ $slider->title}}"/>
                                    </div>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-floating mb-3">
                                        <span>Contenu</span>
                                        <textarea id="content" class="form-control block w-full mt-1 rounded-md @error('content') is-invalid @enderror"  name="content" required autofocus>{{ $slider->content}}</textarea>
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit">Publier</button>
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
@endsection
