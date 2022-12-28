@extends('layouts/admin')

@section('content')
<div id="layoutMissionUpdate">
    <div id="layoutMission_update">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow border-0 rounded-lg mt-5">
                            <div class="card-header"><h5 class="text-center font-weight-light my-4">Mettre à jour les missions et vision</h3></div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="post" action="{{ route('missions.create') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <span>Vision et Missions</span>
                                        <textarea id="content" class="form-control block w-full mt-1 rounded-md @error('content') is-invalid @enderror" id="content" type="text" name="content" required autofocus
                                        rows="3"> {{ old('content') }} </textarea>
                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class=" mb-3">
                                        <span>Image de couverture</span>
                                        <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" name="image" required autofocus />
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <span>Vidéo</span>
                                        <input class="form-control @error('video') is-invalid @enderror" id="video" type="file" name="video"  autofocus />
                                        @error('video')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

@section('script')

@endsection
