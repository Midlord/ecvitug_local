<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-building" aria-hidden="true"></i>
    </div>
    <div class="sidebar-brand-text mx-3">E.C<sup>V</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->

  <li class="nav-item {{ Route::is('admin.estimates.index') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('admin.estimates.index')}}">
      <i class="fas fa-fw fa-calculator"></i>
      <span>Estimates</span></a>
  </li>

  <li class="nav-item {{ Route::is('admin.customers.index') ? 'active' : '' }}">
      <a class="nav-link " href="{{route('admin.customers.index')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Customers</span></a>
  </li>

  <li class="nav-item {{ Route::is('admin.customers.employees') ? 'active' : '' }}">
      <a class="nav-link " href="{{route('admin.customers.employees')}}">
        <i class="fas fa-fw fa-users"></i>
        <span>Employees</span></a>
  </li>

  <li class="nav-item {{ Route::is('admin.products.index') ? 'active' : '' }}">
      <a class="nav-link " href="{{route('admin.products.index')}}">
          <i class="fab fa-fw fa-product-hunt"></i>
        <span>Rentals</span></a>
  </li>

  <li class="nav-item {{ Route::is('admin.orders.index') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('admin.orders.index')}}">
        <i class="fa fa-fw fa-shopping-cart"></i>
      <span>Orders</span></a>
</li>



  
  {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="buttons.html">Buttons</a>
        <a class="collapse-item" href="cards.html">Cards</a>
      </div>
    </div>
  </li> --}}

  {{-- <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="utilities-color.html">Colors</a>
        <a class="collapse-item" href="utilities-border.html">Borders</a>
        <a class="collapse-item" href="utilities-animation.html">Animations</a>
        <a class="collapse-item" href="utilities-other.html">Other</a>
      </div>
    </div>
  </li> --}}

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Others
  </div>

  {{-- <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="login.html">Login</a>
        <a class="collapse-item" href="register.html">Register</a>
        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="404.html">404 Page</a>
        <a class="collapse-item" href="blank.html">Blank Page</a>
      </div>
    </div>
  </li> --}}

  {{-- <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li> --}}

  <li class="nav-item {{ Route::is('admin.histories.index') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('admin.histories.index')}}">
      <i class="fa fa-history" aria-hidden="true"></i>
      <span>Logs</span></a>
  </li>

  <li class="nav-item {{ Route::is('admin.backup.index') ? 'active' : '' }}">
    <a class="nav-link " href="{{route('admin.backup.index')}}">
      <i class="fa fa-hdd" aria-hidden="true"></i>
      <span>Backup And Restore</span></a>
  </li>
  <li class="nav-item {{ Route::is('admin.reports.index') ? 'active' : '' }}">
      <a class="nav-link " href="{{route('admin.reports.index')}}">
        <i class="fa fa-file" aria-hidden="true"></i>
        <span>Reports</span></a>
    </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArchive" aria-expanded="true" aria-controls="collapseArchive">
      <i class="fas fa-fw fa-archive"></i>
      <span>Archive</span>
    </a>
    <div id="collapseArchive" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('admin.archive.products')}}">Rentals</a>
          <a class="collapse-item" href="{{route('admin.archive.customers')}}">Customers</a>
          <a class="collapse-item" href="{{route('admin.archive.employees')}}">Employees</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->