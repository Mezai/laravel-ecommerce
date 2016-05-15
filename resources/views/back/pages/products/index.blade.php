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
  <div class="col-xs-12">
  <div class="box">
    
    <table class="table">
        <tbody>
        	<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Price</th>
            <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getTitle() }}</td>
            <td><span class="label label-success">Active</span></td>
            <td>{{ $product->getPrice() }}</td>
            <td><div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select action
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li>{!! Html::linkAction('Back\Admin\ProductsController@show', 'Show', array($product->id)) !!}</li>
                  <li>{!! Html::linkAction('Back\Admin\ProductsController@edit', 'Edit', array($product->id)) !!}</li>
                  <li><a href="#">Delete</a></li>
                </ul>
              </div>
            </td>
           </tr>
           @endforeach   
        </tbody>
    </table>
    </div>
	</div>
  </div>
</div>

@endsection
