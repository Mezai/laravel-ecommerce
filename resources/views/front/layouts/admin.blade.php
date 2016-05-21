<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@section('title') Admin panel @show</title>
	
	@section('meta_keywords')

	@show @section('meta_author')

    @show @section('meta_description')

    @show
		
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    @section('styles')

</head>
<body>
@include('front.partials.admin.nav')
	

<div class="container">
	@yield('content')
</div>
@include('front.partials.admin.footer')

@yield('scripts')
<script src="{{ asset('js/app.js') }}"></script>
	
</body>
</html>