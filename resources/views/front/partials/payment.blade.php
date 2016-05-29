{{ Form::open(array('action' => 'PaymentController@stripe', 'class' => 'form-horizontal', 'id' => 'stripe_charge')) }}
<fieldset>
  <legend>Payment</legend>
  	<p class="payment_module" id="stripePayment">
  	<a href="" title="Pay with stripe">
    	{{ Html::image('img/stripe.png') }}

    	Pay with stripe
  	</a>
  </p>
</fieldset>
{{ Form::close() }}