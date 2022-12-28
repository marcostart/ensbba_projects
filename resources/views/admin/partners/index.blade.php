@extends('layouts/admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Partenaires</h1>
    {{-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href=""><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un utilisateur</a></div> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <a href=""></a>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('partners.new') }}"><i class="fas fa-user-plus fa-sm text-white-50 me-1"></i>Ajouter un partenaire</a></div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des partenaires
        </div>
        
        <div class="card-body">
            <div class="row">
                @forelse ($partners as $partner)
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch">
                    <div class="card bg-white text-black mb-4">
                        <img class="img-fluid card-img-top" src="{{ url('storage/partners/'.$partner->logo) }}" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="text-black">{{ $partner-> name }}</h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">    
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ route('partners.edit', $partner->id) }}" role="button">Modifier</a>
                                <a class="btn btn-danger btn-sm delete" data-id="{{$partner->id}}" role="button" >Supprimer</a>
                                <form id ="{{'deleteForm-'.$partner->id}}" action="{{ route('partners.delete', $partner->id) }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-xl-12 col-md-12">
                    <div class="bg-white text-black mb-4 align-items-center justify-content-center">
                        <h2 class="text-black">Aucun partenaire associé</h2>
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
                title: "Voulez-vous vraiment supprimer ce partenaire ?",
                text: "Ce partenaire sera definitivement supprimé",
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