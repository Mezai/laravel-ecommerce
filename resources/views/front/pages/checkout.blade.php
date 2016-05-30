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
                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="" style="width: 70px; height: 70px;"> </a>

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
              <strong>{{ $item->price }}</strong>
            </td>
            <td class="col-sm-1 col-md-1 text-center"><strong>{{ $item->subtotal }}</strong></td>
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
      @include('front.partials.address')
      @include('front.partials.payment')
      @section('scripts')
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
      <script src="https://checkout.stripe.com/checkout.js"></script>
      <script type="text/javascript">
        var $form = $('#stripe_charge');
        var handler = StripeCheckout.configure({
          key: "pk_test_jcJD8JNKh4ZifUSXimKJxyIE",
          image: '',
          locale: 'auto',
          token: function(token) {
            $form.append($('<input type="hidden" name="stripeToken"/>').val(token.id));
            $form.append($('<input type="hidden name="stripeEmail"/>').val(token.email));
            $form.submit();
          }
        });
        $('#stripePayment').on('click', function(e) {
          handler.open({
            name: "Test",
            currency: "sek",
            description: "say something",
            amount: 1000,
          });
          e.preventDefault();
        });
        $(window).on('popstate', function() {
          handler.close();
        });
      </script>

      @endsection
      @else
          <div class="alert alert-warning" role="alert">
            <span class="fa fa-info-circle" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            You have no products in cart
          </div>
      @endif
    </div>
</div>
@endsection