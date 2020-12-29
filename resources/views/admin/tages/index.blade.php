@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
    </br></br>
        <p>
            <a href="{{ route('home.tages.create') }}" class="btn btn-primary">Add New Tage</a>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Tage</th>
            <th><center>Actions</center></th>
        </tr>
        
        @foreach($tages as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->tage}}</td>
            <td>
                <center>
                <a href=" {{ route('home.tages.edit',$t->id
                    ) }} " class="btn btn-info">Modifier</a>
                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
                    class="btn btn-danger">Supprimer</a>
                    <form method="post" action="{{ route('home.tages.destroy',$t->id) }}">
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