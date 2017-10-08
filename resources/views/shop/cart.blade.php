@extends('layouts.master')
@section('title')
    Rock Stuff Cart
@endsection

@section('content')
    @if(Session::has('cart'))
       <div class="row">
          <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
             <ul class="list-grup">
                 @foreach($products as $product )
                   <li class="list-group-item">
                       <span class="badge badge-color">
                         <a href="{{ route('product.reduceByOne',['id'=> $product['item']['id']])}}">
                           <i class="fa fa-minus-square" aria-hidden="true"></i>
                         </a>
                       </span>
                       <span class="badge">{{$product['qty']}}</span>
                        <span class="badge badge-color">
                          <a href="{{ route('product.addByOne',['id'=> $product['item']['id']])}}">
                          <i class="fa fa-plus-square" aria-hidden="true"></i></a>
                        </span>
                      <strong>{{$product['item']['title']}}</strong>
                      <span class="label label-success">{{$product['price']}}</span>
                      <div class="btn-group">
                         <span class="label label-danger">
                           <a href="{{ route('product.remove',['id'=> $product['item']['id']])}}"><i class="fa fa-times" aria-hidden="true"></i></a>
                       
                         </span>
                      </div>
                  </li>
                 @endforeach
              </ul>
          </div>
       </div>
       <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <strong>Total:{{$totalPrice}}</strong>
           </div>
       </div>
       <hr>
       <div class="row">
           <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
               <a href="{{url('checkout')}}" type="button" class="btn btn-success">Checkout</a>
           </div>
       </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-m-d-offset-3 col-sm-offset-3">
              <h2 class="text-center">No items in the Cart!</h2>
              <p class="text-center">Proceed to the shopping<a href="{{route('product.index')}}"><strong><u>Click Here</u></strong></a></p>
            </div>
        </div>
    @endif

@endsection