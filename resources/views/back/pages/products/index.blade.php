@extends('back.layouts.app')
@section('title') Products - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default panel-table">
  <div class="panel-heading">
    <div class="row">
      <div class="col col-xs-6">
        <div class="panel-title">
          Products
        </div>
      </div>
      <div class="col col-xs-6 text-right">
        <button type="button" class="btn btn-sm btn-default btn-create">{!! Html::linkAction('Back\Admin\ProductsController@create', 'Create new') !!}</button>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <table class="table table-striped table bordered table-list">
      <thead>
        <tr>
          <th><em class="fa fa-cog"></em></th>
          <th class="hidden-xs">ID</th>
          <th>Name</th>
          <th>Status</th>
          <th>Price</th>
        </tr>
      </thead>
      @foreach ($products as $product)
      <tbody>
        <tr>
          <td class="align-center">
            <a href="{{ action('Back\Admin\ProductsController@edit', array($product->id)) }}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
            {!! Form::open(['class' => 'form-delete', 'method' => 'DELETE', 'action' => ['Back\Admin\ProductsController@destroy', $product->id]]) !!}
            
              <button type="submit"class="btn btn-danger"><em class="fa fa-trash"></em></button>
  
            {!! Form::close() !!}
            <a href="{{ action('Back\Admin\ProductsController@show', array($product->id)) }}" class="btn btn-default"><em class="fa fa-eye"></em></a>
            
          </td>
          <td class="hidden-xs">{{ $product->getId() }}</td>
          <td>{{ $product->getTitle() }}</td>
          <td>
          @if($product->getActive() == 1)
          <span class="label label-success">Active</span>
          @else
          <span class="label label-danger">Disabled</span>
          @endif
          </td>
          <td>{{ $product->getPrice() }}</td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  @include('back.partials.pagination')   
</div>

@endsection


