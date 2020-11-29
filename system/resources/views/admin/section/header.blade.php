<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url ('admin/beranda')}}" class="nav-link">Beranda</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Indah Putri Hartanti
          <img src="{{url('public')}}/AdminLTE-3.0.5/dist/img/user3-128x128.jpg" class="img-circle elevation-2" style="height: 100%" alt="User Image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
           <span class="dropdown-header">Pengaturan Akun</span>
          <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Profile
          </a>
          <a href="#" class="dropdown-item">
            <i class="fa fa-cog"></i> Setting
          </a>
          <a href="{{url('admin/logout')}}" class="dropdown-item">
            <i class="fa fa-users mr-2"></i>Log-Out
          </a>
    </ul>
  </nav>