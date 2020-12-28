@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Modifier Auteur</h4>
                           
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.editeurs.update',$editeur->id) }}" enctype="multipart/form-data">
                             @method('PUT')   
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 
                                 

                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                         
                                       
                                        <label class="col-md-4" style="text-align: center;">Nom<input type="text" name="nom" class="form-control" value="{{ $editeur->nom }}" required> <br></label>
                                        <label class="col-md-4" style="text-align: center;">Prenom<input type="text" name="prenom" class="form-control" value="{{ $editeur->prenom }}" required></label><br>
                                        <label class="col-md-4" style="text-align: center;">Email<input type="text" name="email" class="form-control" value="{{ $editeur->email }}" required></label><br>
                                      </div>

                                      <div class="row mt-3">
                                        
                                        <label class="col-md-6" style="text-align: center;">Adresse<input type="text" name="adresse" class="form-control" value="{{ $editeur->adresse }}" required></label><br>
                                        <label class="col-md-6" style="text-align: center;">Telephone<input type="text" name="tel" class="form-control" value="{{ $editeur->tel }}" required></label><br>
                                      </div>

                                     
                                </div>

                                
                                   <div class="form-group text-center">
                                      <input type="submit" class="btn btn-info" value="Modifier">
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