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
            <th>Edit</th>
            </tr>
            @foreach($products as $product)
            <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getTitle() }}</td>
            <td><span class="label label-success">Active</span></td>
            <td>{{ $product->getPrice() }}</td>
            <td>{!! Html::linkAction('Back\Admin\ProductsController@show', 'Edit', array($product->id)) !!}</td>
           </tr>
           @endforeach   
        </tbody>
    </table>
    </div>
	</div>
  </div>
</div>

@endsection
