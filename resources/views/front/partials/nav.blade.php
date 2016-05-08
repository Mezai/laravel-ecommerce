<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('home') }}">Ecommerce app</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('home')}}">Home</a></li>
        <li><a href="{{ URL::to('products')}}">Products</a></li>
        <li><a href="{{ URL::to('categories')}}">Categories</a></li>
        <li><a href="{{ URL::to('contact')}}">Contact</a></li>
        <li><a href="{{ URL::to('terms')}}">Terms</a></li>
        <li><a href="{{ URL::to('login') }}">Login</a></li>
        <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-shopping-cart"></span> {{ count($cart) }} items<span class="caret"></span></a>
                 <ul class="dropdown-menu dropdown-cart" role="menu">
                   @if(count($cart) > 0)
                   @foreach($cart as $item)
                   <li>
                       <span class="item">
                         <span class="item-left">
                             <img src="http://lorempixel.com/50/50/" alt="" />
                             <span class="item-info">
                                 <span>{{$item->name}}</span>
                                 <span>{{$item->price}}</span>
                             </span>
                         </span>
                         <span class="item-right">
                         {!! Form::open([ 'method'  => 'delete', 'route' => [ 'cart.destroy', $item->id ] ]) !!}
                            {{ Form::submit('X', ['class' => 'btn btn-xs btn-danger pull-right']) }}

                         {!! Form::close() !!}
                         </span>
                     </span>
                   </li>
                   @endforeach
                   @else
                    <p>You have no products in cart</p>
                    @endif
                     <li class="divider"></li>
                     <li><a class="text-center" href="{{ URL::to('checkout') }}">Checkout</a></li>
                 </ul>
            </li>
      </ul>
    </div>
  </div>
</nav>
