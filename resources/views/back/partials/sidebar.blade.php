<div class="sidebar-nav">
    <div class="well">
		<ul class="nav nav-list">
		  <li class="nav-header">Admin Menu</li>
		  <li><a href="{{ URL::to('admin/dashboard')}}"><i class="icon-home"></i> Dashboard</a></li>
          <li><a href="{{ URL::to('admin/products') }}"><i class="icon-envelope"></i> Products <span class="badge badge-info">{{ $totalProducts }}</span></a></li>
          <li><a href="{{ URL::to('admin/categories') }}"><i class="icon-comment"></i> Categories <span class="badge badge-info">10</span></a></li>
          <li><a href="{{ URL::to('admin/orders') }}"> Orders <span class="badge badge-info">{{ $totalOrders }}</span></a></li>
		  <li class="active"><a href="{{ URL::to('admin/customers') }}"><i class="icon-user"></i> Customers <span class="badge badge-info">{{ $totalCustomers }}</span></a></li>
          <li class="divider"></li>
		  <li><a href="{{ URL::to('admin/settings')}}"><i class="icon-comment"></i> Settings</a></li>
		  <li><a href="{{ URL::to('admin/logout')}}"><i class="icon-share"></i> Logout</a></li>
		</ul>
	</div>
</div>
