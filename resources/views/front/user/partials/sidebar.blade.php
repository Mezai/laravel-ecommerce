<div class="col-md-3">
     <ul class="nav nav-pills nav-stacked">
                <li class="{{ (Request::is('dashboard') ?  'active' : '')}}"><a href="{{ URL::to('dashboard') }}"><i class="fa fa-home"></i> Home</a></li>

                <li class="{{ (Request::is('orders') ?  'active' : '')}}"><a href="{{ URL::to('orders')}}"><i class="fa fa-archive"></i> Orders</a></li>

                <li class="{{ (Request::is('address') ?  'active' : '')}}"><a href="{{
                URL::to('address')}}"><i class="fa fa-map-marker"></i> Address</a></li>         
       </ul>
</div>