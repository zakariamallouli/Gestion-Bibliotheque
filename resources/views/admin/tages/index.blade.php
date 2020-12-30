@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <p>
            <a href="{{ route('home.tages.create') }}" class="btn btn-primary"><i class="ni ni-fat-add"></i>Nouveau Tag</a>
        </p>
        
                        <!-- Dark table -->
<div class="row">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Liste des Tags</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-light text-center">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Tag</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach($tages as $t)
              <tr>
                <th scope="row">
                    <i class="bg-warning"></i>
                  {{$t->id}}
                </th>
                <td class="budget">
                    {{$t->tage}}
                </td>
                <td>
                    <a href=" {{ route('home.auteurs.edit',$t->id) }} " class="btn btn-info">Modifier</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" 
                        class="btn btn-danger">Supprimer</a>
                        <form method="post" action="{{ route('home.auteurs.destroy',$t->id) }}">
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