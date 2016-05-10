<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Ecommerce website with laravel @show</title>

    @section('meta_keywords')
    
    @show @section('meta_author')

    @show @section('meta_description')

    @show

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    @yield('styles')

</head>
<body>
  @include('back.partials.nav')
  <div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
          <div class="absolute-wrapper"> </div>


        @include('back.partials.sidebar')
        </div>
      </div>

    <div class="col-md-10 content">
      @yield('content')
    </div>
</div>
  @include('back.partials.footer')

  @yield('scripts')
  <script src="{{ asset('js/admin.js') }}"></script>
  
</body>
</html>
