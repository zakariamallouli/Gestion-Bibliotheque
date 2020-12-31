@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container">
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
                    <div class="card mt-5" style="box-shadow: 5px 5px 5px rgb(35, 28, 134);">
                        <div class="card-header" style="background-color: rgb(88, 119, 223); ">
                            <h1 style="color: white;">Modifier Adherent</h1>
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.users.update',$user->id) }}" enctype="multipart/form-data">
                             @method('PUT')   
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             
                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                         
                                       
                                        <label class="col-md-4" style="text-align: center;">Nom<input type="text" name="name" class="form-control" value="{{ $user->name }}" required> <br></label>
                                        <label class="col-md-4" style="text-align: center;">Cin<input type="text" name="cin" class="form-control" value="{{ $user->cin }}" required></label><br>
                                        <label class="col-md-4" style="text-align: center;">Email<input type="text" name="email" class="form-control" value="{{ $user->email }}" required></label><br>
                                      </div>

                                      <div class="row mt-3">
                                        <label class="col-md-4" style="text-align: center;">Password<input type="text" name="password" class="form-control" value="{{ $user->password }}" readonly required></label><br>
                                        <label class="col-md-4" style="text-align: center;">Adresse<input type="text" name="adresse" class="form-control" value="{{ $user->adresse }}" required></label><br>
                                        <label class="col-md-4" style="text-align: center;">Telephone<input type="text" name="tel" class="form-control" value="{{ $user->tel }}" required></label><br>
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