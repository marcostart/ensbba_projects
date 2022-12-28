@extends('layouts/admin')

@section('content')
<div class="container-fluid px-4">

    <!-- Modal -->
  <div id="articlesModal" class="modal fade" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" >
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <h1 class="mt-4">Articles</h1>
    {{-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href=""><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un utilisateur</a></div> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <a href=""></a>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('articles.new') }}"><i class="fa-solid fa-bullhorn fa-sm text-white-50 me-1"></i>Rédiger un article</a></div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des articles
        </div>
        
        <div class="card-body">
            <div class="row">
                @forelse ($articles as $article)
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-white text-black mb-4">
                            <div class="card-body">
                                <img class="img-fluid" src="{{ url('storage/articles/'.$article->image) }}">
                                <h4 class="text-black">{{ $article->title }}</h4>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div btn-group btn-group-lg btn-group-justified btn-group-fill-height row>
                                    <a class="btn btn-primary btn-sm" href="{{ route('articles.edit', $article->id) }}" role="button">Modifier</a>
                                    <a class="btn btn-danger btn-sm delete" data-id='{{$article->id}}' role="button" >Supprimer</a>
                                    <form id ="{{'deleteForm-'.$article->id}}" action="{{ route('articles.delete', $article->id) }}" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-12 col-md-12">
                        <div class="bg-white text-black mb-4 align-items-center justify-content-center">
                            <h2 class="text-black">Aucun article publié</h2>
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
                title: "Voulez-vous vraiment supprimer cet article ?",
                text: "Cet article sera definitivement supprimé",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#1cbb8c",
                cancelButtonColor: "#ff3d60",
                confirmButtonText: "Oui",
                cancelButtonText: "Annuler",
            }).then((del) => {
                if (del.isConfirmed) {
                    let id = e.target.getAttribute('data-id')
                    // console.log(id);
                    document.getElementById("deleteForm-"+id).submit()
                }
            });
        })
    </script>
@endsection