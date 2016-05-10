@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Products
  </div>
  <div class="panel-body">
    @foreach($products as $product)

    <p>{{ $product->getTitle() }}</p>

    @endforeach
  </div>
</div>

@endsection
