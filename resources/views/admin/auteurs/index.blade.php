@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
    </br></br>
        <p>
            <a href="{{ route('home.auteurs.create') }}" class="btn btn-primary">Add New Auteur</a>
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
        
        @foreach($auteurs as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->nom}}</td>
            <td>{{$a->prenom}}</td>
            <td>{{$a->email}}</td>
            <td>{{$a->adresse}}</td>
            <td>{{$a->tel}}</td>
            <td>
                <a href=" {{ route('home.auteurs.edit',$a->id) }} " class="btn btn-info">Modifier</a>
                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
                    class="btn btn-danger">Supprimer</a>
                    <form method="post" action="{{ route('home.auteurs.destroy',$a->id) }}">
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