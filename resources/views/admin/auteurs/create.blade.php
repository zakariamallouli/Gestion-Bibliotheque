@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="container-fluid">
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Ajouter Auteur</h4>
                           
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.auteurs.store') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 
                                 

                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                         
                                       
                                        <label class="col-md-4" style="text-align: center;">Nom<input type="text" name="nom" class="form-control" required> <br></label>
                                        <label class="col-md-4" style="text-align: center;">Prenom<input type="text" name="prenom" class="form-control" required></label><br>
                                        <label class="col-md-4" style="text-align: center;">Email<input type="text" name="email" class="form-control" required></label><br>
                                      </div>

                                      <div class="row mt-3">
                                        
                                        <label class="col-md-6" style="text-align: center;">Adresse<input type="text" name="adresse" class="form-control" required></label><br>
                                        <label class="col-md-6" style="text-align: center;">Telephone<input type="text" name="tel" class="form-control" required></label><br>
                                      </div>

                                     
                                </div>

                                
                                   <div class="form-group text-center">
                                      <input type="submit" class="btn btn-info" value="Ajouter">
                                  </div>
                              </form>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection