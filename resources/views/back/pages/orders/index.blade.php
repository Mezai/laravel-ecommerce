@extends('back.layouts.app')
@section('title') Orders - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default panel-table">
	<div class="panel-heading">
		<div class="row">
			<div class="col col-xs-6">
				<div class="panel-title">
					Orders
				</div>
			</div>
			<div class="col col-xs-6 text-right">
				<button type="button" class="btn btn sm btn-default btn-create">{!! Html::linkAction('Back\Admin\OrdersController@create', 'Create new') !!}</button>
			</div>
		</div>
	</div>	
	<div class="panel-body">
		<table class="table tabel-striped table-bordered table-list">
			<thead>
				<tr>
					<th><em class="fa fa-cog"></em></th>
					<th class="hidden-xs">ID</th>
					<th>Name</th>
					<th>Payment</th>
					<th>Amount</th>
				</tr>
			</thead>
			@foreach ($orders as $order)
			<tbody>
				<tr>
					<td class="align-center">
						<a href="#" class="btn btn-default"><em class="fa fa-pencil"></em></a>
						<a href="#" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						<a href="#" class="btn btn-default"><em class="fa fa-eye"></em></a>
					</td>
					<td class="hidden-xs">{{ $order->getId() }}</td>
					<td>{{ $order->user->name }}</td>
					<td>{{ $order->getPayment() }}</td>
					<td>{{ $order->getTotalPaid() }}</td>
				</tr>
			</tbody>	
			@endforeach
		</table>
	</div>
	@include('back.partials.pagination')
</div>



@endsection