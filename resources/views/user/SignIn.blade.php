@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 thumbnail-style">
            <h1>Sign In</h1>
              
            <form action="{{route('user.SignIn')}}" method="post">
                <div class="form-group">
                    <label for="username">User Name*</label>
                    <input type="username" id="username" name="username" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="email">E-mail*</label>
                    <input type="email" id="email" name="email" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required autofocus>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                {{ csrf_field() }}
            </form>
            <p><a href="{{route('user.SignUp')}}">New to Rockstuff ? Sign Up Now!</a> </p>
        </div>
    </div>
@endsection