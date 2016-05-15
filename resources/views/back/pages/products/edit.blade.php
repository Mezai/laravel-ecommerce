@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Edit: {!! $product->getTitle() !!}
  </div>
  <div class="panel-body">

	   {!! Form::model($product, ['method' => 'PATCH', 'action' => ['Back\Admin\ProductsController@update', $product->id]]) !!}
  	

      @include ('back.partials.form', ['submitButtonText' => 'Update product'])


  	{!! Form::close() !!}


    @include ('errors.list')
  	
  </div>
</div>
@endsection