@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
    </br></br>
        <p>
            <a href="{{ route('home.genres.create') }}" class="btn btn-primary">Add New Genre</a>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Genre</th>
            <th>Description</th>
            <th><center>Actions</cebter></th>
        </tr>
        
        @foreach($genres as $g)
        <tr>
            <td>{{$g->id}}</td>
            <td>{{$g->genre}}</td>
            <td>{{$g->description}}</td>
            <td>
                <center>
                <a href=" {{ route('home.genres.edit',$g->id
                    ) }} " class="btn btn-info">Modifier</a>
                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
                    class="btn btn-danger">Supprimer</a>
                    <form method="post" action="{{ route('home.genres.destroy',$g->id) }}">
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">   
                    </form>
                </center>
            </td>
        </tr>
        @endforeach

        </table>
        
    </div>
</section>
@endsection