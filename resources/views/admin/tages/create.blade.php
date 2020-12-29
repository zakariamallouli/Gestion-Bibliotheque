@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5" style="box-shadow: 5px 5px 5px rgb(35, 28, 134);">
                        <div class="card-header" style="background-color: rgb(88, 119, 223); ">
                            <h1 style="color: white;">Ajouter Tag</h1>
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.tages.store') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 
                                 

                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                         
                                       
                                        <label class="col-md-12" style="text-align: center;">Tag<input type="text" name="tage" class="form-control" required> <br></label>
                                        
                                       
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