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
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
	<div class="panel-footer">
		<div class="row">
			<div class="col col-xs-4">
				Page 1 of 5
			</div>
			<div class="col col-xs-8">
				<ul class="pagination hidden-xs pull-right">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
				<ul class="pagination visible-xs pull-right">
					<li><a href="#"><<</a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>		
</div>
@endsection
