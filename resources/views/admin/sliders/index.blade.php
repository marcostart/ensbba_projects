@extends('layouts/admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Sliders</h1>
    {{-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href=""><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un utilisateur</a></div> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <a href=""></a>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('sliders.new') }}"><i class="fa-solid fa-plus fa-sm text-white-50 me-1"></i>Ajouter un slider</a></div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des sliders
        </div>
        
        <div class="card-body">
            <div class="row">
                @forelse ($sliders as $slider)
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-white text-black mb-4">
                            <div class="card-body">
                                <img class="img-fluid" src="{{ url('storage/sliders/'.$slider->image) }}">
                                <h4 class="text-black">{{ $slider->title }}</h4>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div btn-group btn-group-lg btn-group-justified btn-group-fill-height row>
                                    <a class="btn btn-primary btn-sm" href="{{ route('sliders.edit', $slider->id) }}" role="button">Modifier</a>
                                    <a class="btn btn-danger btn-sm delete" data-id="{{$slider->id}}" role="button" >Supprimer</a>
                                    <form id ="{{'deleteForm-'.$slider->id}}" action="{{ route('sliders.delete', $slider->id) }}" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-12 col-md-12">
                        <div class="bg-white text-black mb-4 align-items-center justify-content-center">
                            <h2 class="text-black">Aucun slider publié</h2>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('.delete').click(function(e) {
        Swal.fire({
            title: "Voulez-vous vraiment supprimer ce slider ?",
            text: "Ce slider sera definitivement supprimé",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#1cbb8c",
            cancelButtonColor: "#ff3d60",
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
        }).then((del) => {
            if (del.isConfirmed) {
                let id = e.target.getAttribute('data-id')
                document.getElementById("deleteForm-"+id).submit()
            }
        });
    })
</script>
@endsection