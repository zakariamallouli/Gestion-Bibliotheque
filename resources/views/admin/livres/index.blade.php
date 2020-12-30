@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            </div>
        </div>
        <p>
            <a href="{{ route('home.livres.create') }}" class="btn btn-primary"><i class="ni ni-fat-add"></i> Livre</a>
        </p>

        <!-- Dark table -->
<div class="row">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Liste des Livres</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-light table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Langue</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="list">
            <td>
                       
        
                </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>    
</div>
</section>
@endsection