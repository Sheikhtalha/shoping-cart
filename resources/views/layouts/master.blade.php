<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('css/app1.css')}}">
    <!--<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{URL::to('css/reset.css')}}"> 
  <link rel="stylesheet" href="{{URL::to('css/style.css')}}">   -->
  
    @yield('style')
</head>
<body>
@include('partials.header')

<div class="container">
    @yield('content')
   
</div>


<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/4c02fddb4b.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--  <script src="{{URL::to('js/modernizr.js')}}"></script>
<script src="{{URL::to('js/jquery-2.1.1.js')}}"></script>
<script src="{{URL::to('js/velocity.min.js')}}"></script>
<script src="{{URL::to('js/main.js')}}"></script>-->
@yield('scripts')
</body>
</html>