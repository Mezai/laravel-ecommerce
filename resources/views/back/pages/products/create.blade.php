@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Create new product
  </div>
  <div class="panel-body">

	   {!! Form::open(['url' => 'admin/products', 'files' => true]) !!}
  	

      @include ('back.partials.form', ['submitButtonText' => 'Create product'])


  	{!! Form::close() !!}


    @include ('errors.list')
  	
  </div>
</div>
@endsection