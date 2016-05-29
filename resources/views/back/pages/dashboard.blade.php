@extends('back.layouts.app')
@section('title') Dashboard - @parent @stop
@section('meta_keywords')
<meta name="keywords" content="ecommerce,admin"/>
<meta id="token" name="token" content="{{ csrf_token() }}">
@parent @stop
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Dashboard
  </div>
  <div class="panel-body">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Customers</h3>
      </div>
      
    </div>

    <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Orders</h3>
            </div>
            <div class="box-body">
              <div class="row">
                  <p class="text-center">
                    <strong id="salesDates"></strong>
                  </p>
                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart"></canvas>
                  </div>
                </div>
            </div>
      </div>
  </div>
</div>
@section('scripts')
<script src="{{ asset('js/test.js') }}"></script>
@endsection


@endsection
