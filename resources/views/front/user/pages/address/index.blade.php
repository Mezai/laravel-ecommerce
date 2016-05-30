@extends('front.layouts.admin')
@section('title') Address - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
@parent @stop
@section('content')
<div class = "panel panel-primary">
   <div class="panel-heading">
      <h3 class="panel-title">Address</h3>
   </div>
   <div class="panel-body">
      <table class="table table-striped table-bordered table-list">
        <thead>
          <tr>
        	  <th><em class="fa fa-cog"></em></th>
              <th>Postcode</th>
           	  <th>Address</th>
           	  <th>City</th>
           	  <th>Country</th>
          </tr> 
        </thead>
        <tbody>
          <tr>
          	<td align="center">
            	<a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
            </td>
            <td>{{ $address->postcode }}</td>
            <td>{{ $address->address }}</td>
            <td>{{ $address->city }}</td>
            <td>{{ $address->country }}</td>
          </tr>
        </tbody>
      </table>
   </div>
</div>

@endsection