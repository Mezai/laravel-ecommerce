@extends('front.layouts.app')
@section('title') Checkout - @parent @stop
<meta name="_token" content="{!! csrf_token() !!}" />
@section('content')
<h2>Confirmation</h2>
@endsection
