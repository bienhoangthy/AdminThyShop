<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('admin/dist/img/Thy.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Thy Biện</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-check text-success"></i> Super Admin</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-credit-card"></i> <span>Orders</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-list-alt"></i> <span>Categories</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('listcategories') }}"><i class="fa fa-circle-o"></i> All Categories</a></li>
          <li><a href="{{ route('addcategories') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-archive"></i> <span>Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('listproducts') }}"><i class="fa fa-circle-o"></i> All Products</a></li>
          <li><a href="{{ route('addproduct') }}"><i class="fa fa-circle-o"></i> Add Product</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> All Users</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Add User</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="fa fa-commenting-o"></i> <span>Comments</span></a></li>
      <li><a href="#"><i class="fa fa-user-secret"></i> <span>Customers</span></a></li>
      <li><a href="#"><i class="fa fa-tv"></i> <span>Pages</span></a></li>
      <li><a href="#"><i class="fa fa-sliders"></i> <span>Settings</span></a></li>
      <li class="header">Today</li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>