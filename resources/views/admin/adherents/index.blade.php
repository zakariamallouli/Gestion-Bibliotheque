@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <p>
            <a href="{{ route('home.adherents.create') }}" class="btn btn-primary" aria-disabled="true"><i class="ni ni-fat-add"></i>  Nouveau Adherent</a>
        </p>
        
            <!-- Dark table -->
<div class="row">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Liste des Adherents</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">CIN</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Telephone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach($users as $a)
              <tr>
                <th scope="row">
                    <i class="bg-warning"></i>
                  {{$a->id}}
                </th>
                <td class="budget">
                    {{$a->cin}}
                </td>
                <td>
                    {{$a->name}}
                </td>
                <td>
                    {{$a->email}}
                </td>
                <td>
                    {{$a->tel}}
                </td>
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>    
</div>
</section>
@endsection