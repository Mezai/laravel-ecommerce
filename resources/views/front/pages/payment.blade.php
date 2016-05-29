@extends('front.layouts.app')
@section('title') Payment - @parent @stop
<meta name="_token" content="{!! csrf_token() !!}" />
@section('content')
<h2>Payment processing</h2>
@endsection