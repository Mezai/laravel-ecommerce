@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    {{ $product->getTitle() }}
  </div>
  <div class="panel-body">
  	<h1>{{ $product->getTitle() }}</h1>
  	

  </div>
</div>
@endsection

