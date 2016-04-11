@extends('front.layouts.app');
@section('title') Categories - @parent @stop
@section('content')
<div class="row">
    <div class="col-lg-12">
      <h3>Categories</h3>
    </div>
</div>

<div class="row text-center">
  @foreach($categories as $category)
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="http://placehold.it/800x500" alt="">
                <div class="caption">
                    <h3>{{ $category->getTitle() }}</h3>
                    <p>{{ $category->getDescription() }}</p>
                    <p>
                        <a href="#" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>
  @endforeach
</div>
@endsection
