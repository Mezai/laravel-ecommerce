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
              {{ Html::image("img/".$product->getImage()) }}
              <div class="caption">
                  <h3>{{ $product->getTitle() }}</h3>
                  <p>{{ str_limit($product->getDescription(), 100) }}</p>

                  <p>{{ formatPrice($product->getPrice()) }}</p>
                  <div class="row">
                  <div class="col-xs-6">
                  {{ Form::open(['route' => 'cart.store']) }}
                      {{ Form::hidden('product_id', $product->getId()) }}
                     {{ Form::submit('Add to cart', ['class' => 'btn btn-primary']) }}
                  {{ Form::close() }}
                  </div>
                  <div class="col-xs-6">
                      <a href="#" class="btn btn-default">More Info</a>
                  </div>
                  </div>
              </div>
          </div>
      </div>
@endforeach
</div>
@endsection
