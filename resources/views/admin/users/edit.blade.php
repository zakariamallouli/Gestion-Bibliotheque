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
                            <h1 style="color: white;">Modifier Roles</h1>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('home.users.update', $user->id) }}" methode="POST"  enctype="multipart/form-data">
                        
                        @method('PUT')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @foreach ($roles as $role)
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}"
                                     id="{{ $role->id }}" @foreach ($user->roles as $userRole) @if ($userRole->id === $role->id) checked @endif @endforeach >
                                    <label for="{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
                                </div>    
                            @endforeach
                            <button type="submit" class="btn btn-primary">Modifier les roles</button>
                        </form>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection