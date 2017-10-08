@extends('layouts.banner')
@extends('layouts.master')
@section('title')
    Rock Stuff
  @endsection
@section('content')

    @if(Session::has('success'))
    <div class="row">
       <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
           <div id="charge-message" class="alert alert-success">
              {{Session::get('success')}}
           </div>
       </div>
    </div>
    @endif

    
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                {{--  <div class="thumbnail">
                 <li class="cd-item">
                   <img src="{{$product->imagePath}}" alt="Item Preview" class="img-responsive">
                   <h3>{{$product->title}}</h3>
                    <a href="#0" class="cd-trigger">Quick View</a>
                  </li>
                  <div class="cd-quick-view">
    <!-- <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img src="img/item-1.jpg" alt="Product 1"></li>
        <li><img src="img/item-2.jpg" alt="Product 2"></li>
        <li><img src="img/item-3.jpg" alt="Product 3"></li>
      </ul> 

      <ul class="cd-slider-navigation">
        <li><a class="cd-next" href="#0">Prev</a></li>
        <li><a class="cd-prev" href="#0">Next</a></li>
      </ul> 
    </div>--> <!-- cd-slider-wrapper -->

    <div class="cd-item-info">
      <h2>{{$product->title}}</h2>
      <p>{{$product->description}}</p>

      <ul class="cd-item-action">
        <li><button class="add-to-cart">Add to cart</button></li>         
        <li><a href="#0">Learn more</a></li>  
      </ul> <!-- cd-item-action -->
    </div> <!-- cd-item-info -->
    <a href="#0" class="cd-close">Close</a>
  </div>
                  </div>  --}}


                  <div class="thumbnail">
                    <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>{{$product->title}}</h3>
                          <h4>{{$product->description}}</h4>
                        <div class="clearfix">
                            <div class="pull-left price">{{$product->price}}</div>
                            <a href="{{route('product.addToCart', ['id'=>$product->id ])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                 </div> 
                </div>
            @endforeach
        </div>
    @endforeach
@endsection 
 
