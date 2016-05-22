@extends('back.layouts.app')
@section('title') Categories - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class="panel panel-default panel-table">
	<div class="panel-heading">
		<div class="row">
			<div class="col col-xs-6">
				<div class="panel-title">
					Categories
				</div>
			</div>
			<div class="col col-xs-6 text-right">
				<button type="button" class="btn btn sm btn-default btn-create">{!! Html::linkAction('Back\Admin\CategoriesController@create', 'Create new') !!}</button>
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
					<th>Description</th>
					<th>Status</th>
				</tr>
			</thead>
			@foreach ($categories as $category)
			<tbody>
				<tr>
					<td class="align-center">
						<a href="#" class="btn btn-default"><em class="fa fa-pencil"></em></a>
						<a href="#" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						<a href="#" class="btn btn-default"><em class="fa fa-eye"></em></a>
					</td>
					<td class="hidden-xs">{{ $category->getId() }}</td>
					<td>{{ $category->getTitle() }}</td>
					<td>{{ str_limit($category->getDescription(), 80) }}</td>
					<td>{{ $category->getActive() }}</td>
				</tr>
			</tbody>	
			@endforeach
		</table>
	</div>
	@include('back.partials.pagination')
</div>
@endsection