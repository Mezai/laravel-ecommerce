@extends('back.layouts.app')
@section('title') Customers - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Create new customer
  </div>
  <div class="panel-body">
  {!! Form::open(['url' => 'admin/customers']) !!}

	@include ('back.pages.customers.partials.form', ['submitButtonText' => 'Create customer'])


  	{!! Form::close() !!}


    @include ('errors.list')
  	
  </div>
</div>
@endsection