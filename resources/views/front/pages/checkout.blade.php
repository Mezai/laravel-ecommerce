@extends('front.layouts.app')
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
          @if(count($cart))
          @foreach($cart as $item)
          <tr>
            <td class="col-sm-8 col-md-6">
              <div class="media">
                <div class="media-body">
                  <h4 class="media-heading">{{$item->name}}</h4>
                  <span>Status: </span><span class="text-success"><strong>In stock</strong></span>
                </div>
              </div>
            </td>
            <td class="col-sm-1 col-md-1">
              <input type="email" class="form-control" id="inputEmail" value="{{$item->qty}}">
            </td>
            <td class="col-sm-1 col-md-1 text-center">
              <strong>{{$item->price}}</strong>
            </td>
            <td class="col-sm-1 col-md-1 text-center"><strong>{{$item->price}}</strong></td>
            <td class="col-sm-1 col-md-1">
              <form action="{{url('cart/remove')}}" method="POST">
                <input type="hidden" name="product_id" value="{{$item->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger">
                  <span class="fa fa-trash"></span>
                  Remove
                </button>
              </form>
            </td>
          </tr>
          @endforeach
          @else
           <p>You have no products in cart</p>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
