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

	{!! Form::open(['url' => 'admin/products']) !!}
  	<div class="form-group">
  		{!! Form::label('title', 'Title:') !!}
  		{!! Form::text('title', null, ['class' => 'form-control']) !!}	

  	</div>

  	<div class="form-group">
  	  	{!! Form::label('active', 'Active:') !!}
         <div class="make-switch">
  		    {!! Form::checkbox('active', null, null, ['class' => 'form-control']) !!}
          </div>
  	</div>

    <div class="form-group">
      {!! Form::label('price', 'Price:') !!}
      {!! Form::text('price', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
      {!! Form::label('reference', 'Reference:') !!}
      {!! Form::text('reference', null, ['class' => 'form-control']) !!}

    </div>

  	<div class="form-group">
  		{!! Form::label('description', 'Description:') !!}

  		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

  	</div>

    <div class="form-group">
      {!! Form::submit('Create product', ['class' => 'btn btn-primary form-control']) !!}
    </div>

  	


  	{!! Form::close() !!}
  	
  </div>
</div>
@endsection