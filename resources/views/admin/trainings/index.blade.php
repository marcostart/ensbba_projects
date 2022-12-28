@extends('layouts/admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Formations</h1>
    {{-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href=""><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un utilisateur</a></div> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <a href=""></a>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('trainings.new') }}"><i class="fa-solid fa-plus fa-sm text-white-50 me-1"></i>Ajouter une formation</a></div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des formations
        </div>
        
        <div class="card-body">
            <div class="row">
                @forelse ($trainings as $training)
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-white text-black mb-4">
                        <div class="card-body">
                            <img class="img-fluid d-flex align-items-stretch"" src="{{ url('storage/trainings/'.$training->image) }}"> 
                            <h5 class="text-black">{{ $training->name}}</h4>
                            <p class="text-black">{{ $training-> description }}</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ route('trainings.edit', $training->id) }}" role="button">Modifier</a>
                                <a class="btn btn-danger btn-sm delete" data-id="{{$training->id}}" role="button" >Supprimer</a>
                                <form id ="{{'deleteForm-'.$training->id}}" action="{{ route('trainings.delete', $training->id) }}" method="post">
                                    @csrf
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-xl-12 col-md-12">
                    <div class="bg-white text-black mb-4 align-items-center justify-content-center">
                        <h2 class="text-black">Aucune formation disponible</h2>
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
                title: "Voulez-vous vraiment supprimer cette formation ?",
                text: "Cette formation sera definitivement supprimée",
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