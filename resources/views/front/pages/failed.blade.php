@extends('front.layouts.app')
@section('title') Failed - @parent @stop
<meta name="_token" content="{!! csrf_token() !!}" />
@section('content')
<h2>Failed</h2>
@endsection
