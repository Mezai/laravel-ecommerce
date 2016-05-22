@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Edit: {!! $customer->getName() !!}
  </div>
  <div class="panel-body">
	
	{!! Form::model($customer, ['method' => 'PATCH', 'action' => ['Back\Admin\CustomersController@update', $customer->id]]) !!}
	
	@include ('back.pages.customers.partials.form', ['submitButtonText' => 'Update customer'])

	{!! Form::close() !!}


    @include ('errors.list')

  </div>
</div>
@endsection