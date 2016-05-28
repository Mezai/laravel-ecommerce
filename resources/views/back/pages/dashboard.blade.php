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
              <h3 class="box-title">Sales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
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
