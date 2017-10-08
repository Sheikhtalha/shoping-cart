@extends('layouts.master')
@section('title')
    Contact Us
 @endsection
 @section('content')
    <div class="text-center">
  	<h1 class="details">Dilevery Details</h1>
  	<p class="paragraph">Enter your shipping address</p>
  </div>
  <hr>
  <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3 thumbnail-style">
         
  <form action="{{route('cashOnDilevery')}}" method="post" id="dilevery-form">
                <div class="row">
                    <div class="col-xs-12">
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" id="name" name="name" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input type="text" id="phone" class="form-control" required>
                        </div>
                    </div>
                    
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success" >Buy Now</button>
            </form>

 @endsection