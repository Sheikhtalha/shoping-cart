@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4 thumbnail-style">
        <h1>Sign Up</h1>
       {{-- @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif--}}
        <form action="{{route('user.SignUp')}}" method="post">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="username" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            {{ csrf_field() }}
            <br>
        </form>
    </div>
</div>
@endsection