

<nav class="navbar navbar-default navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{'/'}}">Rock Stuff</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('about')}}">About</a></li>
        <li><a href="{{URL::to('contact-us')}}">Contact</a></li>
        
        <li>
            <a href="{{route('product.cart')}}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
             Cart
                <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} </span>
            </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
            User Account <span class="caret"></span></a>
           <ul class="dropdown-menu">
            @if(Auth::check())
              <li><a href="{{route('user.profile')}}">{{@Auth::User()->username}}</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{route('user.logout')}}">Logout</a></li>
            @else
              <li><a href="{{route('user.SignIn')}}">Sign In </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{route('user.SignUp')}}">Sign Up</a></li>
            @endif



          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@section('scripts')
    <script type="text/javascript" href="{{URL::to('js/header.js')}}"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="{{URL::to('css/banner.css')}}">
@endsection
