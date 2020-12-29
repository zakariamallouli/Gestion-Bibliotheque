@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <p>
            <a href="{{ route('home.editeurs.create') }}" class="btn btn-primary">Add New Adherent</a>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Tel</th>
            <th>Actions</th>
        </tr>
        
        @foreach($editeurs as $e)
        <tr>
            <td>{{$e->id}}</td>
            <td>{{$e->nom}}</td>
            <td>{{$e->prenom}}</td>
            <td>{{$e->email}}</td>
            <td>{{$e->adresse}}</td>
            <td>{{$e->tel}}</td>
            <td>
                <a href=" {{ route('home.editeurs.edit',$e->id
                    ) }} " class="btn btn-info">Modifier</a>
                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
                    class="btn btn-danger">Supprimer</a>
                    <form method="post" action="{{ route('home.editeurs.destroy',$e->id) }}">
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                    </form>
            </td>
        </tr>
        @endforeach

        </table>
        
    </div>
</section>
@endsection