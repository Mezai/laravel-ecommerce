@extends('front.layouts.app')
@section('title') Products - @parent @stop
@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3>Products</h3>
    </div>
</div>
<div class="row text-center">
@foreach($products as $product)
      <div class="col-md-3 col-sm-6 hero-feature">
          <div class="thumbnail">
              <img src="http://placehold.it/800x500" alt="">
              <div class="caption">
                  <h3>{{ $product->getTitle() }}</h3>
                  <p>{{ $product->getDescription() }}</p>

                  <p>{{ $product->getPrice() }}</p>
                  <p>
                    <form method="POST" action="{{url('cart')}}">
                      <input type="hidden" name="product_id" value="{{$product->getId()}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-primary">Add to cart</button>
                    </form>
                      <a href="#" class="btn btn-default">More Info</a>
                  </p>
              </div>
          </div>
      </div>
@endforeach
</div>
@endsection
