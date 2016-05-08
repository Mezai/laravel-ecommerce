@extends('front.layouts.app')
@section('title') Checkout - @parent @stop
@section('content')
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
      @if(count($cart) > 0)
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
          @foreach($cart as $item)
          <tr>
            <td class="col-sm-8 col-md-6">
              <div class="media">
                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>

                <div class="media-body">
                  <h4 class="media-heading">{{$item->name}}</h4>
                  <span>Status: </span><span class="text-success"><strong>In stock</strong></span>
                </div>
              </div>
            </td>
            <td class="col-sm-1 col-md-1">
              {{ Form::open([ 'method'  => 'patch', 'route' => [ 'cart.update', $item->id ] ]) }}
                
                {{ Form::text('inputQty', $item->qty, array('class' => 'form-control')) }}

                {{ Form::hidden('product_id', $item->id) }}
                
                {{ Form::submit('OK', ['class' => 'btn btn-default']) }}

              {{ Form::close() }}
              
            </td>
            <td class="col-sm-1 col-md-1 text-center">
              <strong>{{$item->price}}</strong>
            </td>
            <td class="col-sm-1 col-md-1 text-center"><strong>{{$item->price}}</strong></td>
            <td class="col-sm-1 col-md-1">

            {{ Form::open(['method' => 'delete', 'route' => ['cart.destroy', $item->id]])}}
              
              {{ Form::hidden('product_id', $item->id) }}
              {{ Form::button('<span class="fa fa-trash"></span> Remove', ['type' => 'submit', 'class' => 'btn btn-danger'])}}
    
            {{ Form::close() }}
            </td>
          </tr>
          @endforeach    
        </tbody>
      </table>
      @else
          <div class="alert alert-warning" role="alert">
            <span class="fa fa-info-circle" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            You have no products in cart
          </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
  <form class="form-horizontal">
<fieldset>


<legend>Billing address</legend>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Firstname</label>
  <div class="col-md-4">                     
    <input type="text" name="firstname" class="form-control input-md" id="firstname">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Lastname</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Send</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
@endsection
