@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Edit user {{ $user->name }}</h4>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{ route('home.users.update',$user) }}" method="POST">

                        <div class="">
                            
                            <label for="email" class="col-md-2 col-form-label ">Email</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                        <div class="col-md-6">
                        @foreach($roles as $role)
                            <div class="form-check">
                              <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif
                              >
                              <label> {{ $role->name }} </label>
                          </div>
                        @endforeach
                            </div>
                            </div>
                            <center>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button></center>
                    </form>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection