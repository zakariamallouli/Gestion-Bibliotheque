@extends('layouts.admin')
@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Modifier Tag</h4>
                           
                        </div>
                        <div class="card-body">
                            <div class="table">
                             <form method="post" action="{{ route('home.tages.update',$tage->id) }}" enctype="multipart/form-data">
                             @method('PUT')   
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <div class="form-group">

                                    <div class="row mt-4">
                                   <br>
                                        <label class="col-md-12" style="text-align: center;">Tag<input type="text" name="tage" class="form-control" value="{{ $tage->tage }}" required> <br></label>                                     
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