@extends('front.layouts.app');
@section('title') Checkout - @parent @stop
@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>
              Product
            </th>
            <th>
              Quantity
            </th>
            <th class="text-center">
              Price
            </th>
            <th class="text-center">
            Total
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="col-sm-8 col-md-6">
              <div class="media">
                <div class="media-body">
                  <h4 class="media-heading">Product name</h4>
                  <h5 class="media-heading">Brand name</h5>
                  <span>Status: </span><span class="text-success"><strong>In stock</strong></span>
                </div>
              </div>
            </td>
            <td class="col-sm-1 col-md-1">
              <input type="email" class="form-control" id="inputEmail" value="3">
            </td>
            <td class="col-sm-1 col-md-1 text-center">
              <strong>4.00</strong>
            </td>
            <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
            <td class="col-sm-1 col-md-1">
              <button type="button" class="btn btn-danger">
                <span class="fa fa-trash"></span>
                Remove
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
