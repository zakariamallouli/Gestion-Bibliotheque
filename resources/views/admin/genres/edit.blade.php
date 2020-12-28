@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Modifier Genre</h4>
                           
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.genres.update',$genre->id) }}" enctype="multipart/form-data">
                             @method('PUT')   
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                        <label class="col-md-6" style="text-align: center;">Genre<input type="text" name="genre" class="form-control" value="{{ $genre->genre }}" required> <br></label>
                                        <label class="col-md-6" style="text-align: center;">Description<input type="text" name="description" class="form-control" value="{{ $genre->description }}" required></label><br>                                       
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