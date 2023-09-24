<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CleanTown</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{@Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
    
           
                <li class="nav-item">
                  <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
  
         
   
            </ul>
    
          </li>
          @php
          $prefix = Request::route()->getPrefix();
          $route = Request::route()->getName();
          @endphp
          @if (@Auth::user() ->role== "admin")
          <li class="nav-item">
            <a href="{{route('landlord.index')}}" class="nav-link {{$route == 'landlord.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Landlord
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('cleaner.index')}}" class="nav-link {{$route == 'cleaner.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cleaner
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('volunteer.index')}}" class="nav-link {{$route == 'volunteer.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Volunteer
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('dailyupdate.index')}}" class="nav-link {{$route == 'dailyupdate.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daily Update
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('complain_index')}}" class="nav-link {{$route == 'complain_index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Complain  
               
              </p>
            </a>
          </li>
          @elseif(@Auth::user() ->role== "volunteer")
          <li class="nav-item">
            <a href="{{route('volunteer_profile')}}" class="nav-link {{$route == 'volunteer_profile'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Profile
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('dailyupdatevolunteer.index')}}" class="nav-link {{$route == 'dailyupdatevolunteer.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daily Update
               
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('complain_index_volunteer')}}" class="nav-link {{$route == 'complain_index_volunteer'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Complain 
               
              </p>
            </a>
          </li>
          @else 
          <li class="nav-item">
            <a href="{{route('user_dashboard')}}" class="nav-link {{$route == 'user_dashboard'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User Dashboard
               
              </p>
            </a>
          </li>
          @endif


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>