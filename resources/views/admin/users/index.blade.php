@extends('layouts/admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Utilisateurs</h1>
    {{-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href=""><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un utilisateur</a></div> --}}
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <a href=""></a>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('users.new') }}"><i class="fas fa-user-plus fa-sm text-white-50 me-1"></i>Ajouter un utilisateur</a></div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Liste des utilisateurs
        </div>
        
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Administrateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Administrateur</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>@if ($user->admin) Oui @else Non @endif</td>
                        <td>                            
                            <form id = "{{'deleteForm-'.$user->id}}" action="{{ route('users.delete', $user->id) }}" method="post">   
                                @csrf                             
                            </form>
                            <a class="delete" type="button" data-id="{{$user->id}}" onclick="deleteUser({{$user->id}});" ><i class="fas fa-trash me-2"></i></a>
                            <a href="{{ route('users.edit', $user->id) }}" title="Modifier"><i class="fas fa-user-edit me-2" ></i></a>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
    function deleteUser(id){
            Swal.fire({
                title: "Voulez-vous vraiment supprimer cet utilisateur ?",
                text: "Cet utilisateur sera definitivement supprimé",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#1cbb8c",
                cancelButtonColor: "#ff3d60",
                confirmButtonText: "Oui",
                cancelButtonText: "Annuler",
            }).then((del) => {
                if (del.isConfirmed) {
                    
                    document.getElementById("deleteForm-"+id).submit()
                }
            });
    }
    </script>
@endsection