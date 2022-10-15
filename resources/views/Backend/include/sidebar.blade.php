<aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a href="dashboard.php" class="navbar-brand" href="index.html">Pizza End<span class="dashboard_text">Dashboard</span></a></h1>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="sidebar-menu">
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Category</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('category.create')}}"><i class="fa fa-angle-right"></i>Add Category</a></li>
            <li><a href="{{route('category.list')}}"><i class="fa fa-angle-right"></i>Category List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Items</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('item.create')}}"><i class="fa fa-angle-right"></i>Add Items</a></li>
            <li><a href="{{route('item.list')}}"><i class="fa fa-angle-right"></i>View Items</a>
            <li><a href="{{route('item.price')}}"><i class="fa fa-angle-right"></i>Add Price</a></li>
            <li><a href="{{route('item.price.list')}}"><i class="fa fa-angle-right"></i>View Price</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Offer</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('offer.create')}}"><i class="fa fa-angle-right"></i>Add Offer</a></li>
            <li><a href="{{route('offer.list')}}"><i class="fa fa-angle-right"></i>Manage Offer</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Special Menu</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('speacial.create')}}"><i class="fa fa-angle-right"></i>Add Items</a></li>
            <li><a href="{{route('speacial.list')}}"><i class="fa fa-angle-right"></i>View Items</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Orders</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('order.list')}}"><i class="fa fa-angle-right"></i>View Order</a></li>
            <!--<li><a href="#"><i class="fa fa-angle-right"></i>View Product</a></li>-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pizza End Meal</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('meal.create')}}"><i class="fa fa-angle-right"></i>Add Meals</a></li>
            <li><a href="{{route('meal.list')}}"><i class="fa fa-angle-right"></i>View Meals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Slider</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_slider.php"><i class="fa fa-angle-right"></i>Add Slider</a></li>
            <li><a href="view_slider.php"><i class="fa fa-angle-right"></i>View Slider</a></li>

          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</aside>
