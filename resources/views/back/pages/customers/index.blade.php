@extends('back.layouts.app')
@section('title') Customers - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default panel-table">
	<div class="panel-heading">
		<div class="row">
			<div class="col col-xs-6">
				<div class="panel-title">
					Customers
				</div>
			</div>
			<div class="col col-xs-6 text-right">
				<button type="button" class="btn btn-sm btn-default btn-create">{!! Html::linkAction('Back\Admin\CustomersController@create', 'Create new') !!}</button>
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
					<th>Email</th>
					<th>Logged in</th>
				</tr>
			</thead>
			@foreach ($customers as $customer)
			<tbody>
				<tr>
					<td class="align-center">
						<a href="#" class="btn btn-default"><em class="fa fa-pencil"></em></a>
						<a href="#" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						<a href="#" class="btn btn-default"><em class="fa fa-eye"></em></a>
					</td>
					<td class="hidden-xs">{{ $customer->getId() }}</td>
					<td>{{ $customer->getName() }}</td>
					<td>{{ $customer->getEmail() }}</td>
					@if ($customer->isActive()) 
					<td><span><i class="fa fa-check-circle"></i></span></td>
					@else
					<td><span><i class="fa fa-power-off" aria-hidden="true"></i></span></td>
					@endif
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
	@include('back.partials.pagination')	
</div>
@endsection
