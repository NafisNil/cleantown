<header class="page-header menu-on-end " id="page-header" style="height: 100px; background:#205C20;">
    <!--start navbar-->
    <div class="container">
       <nav class="main-navbar " id="main-nav">
          <a class="navbar-brand " href="#">
          <img class="{{asset('frontend')}}/brand-logo light-logo img-fluid " style="height: 100px !important"
             src="{{asset('frontend')}}/cleantown2-sub/frontend/assets/images/logo/logo.png" alt />
          </a>
          <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
          <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
             <ul class="navbar-nav  mobile-menu ">
               <li class="nav-item">
                  <a class="nav-link active" href="{{url('/')}}">হোম</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">সম্পর্কিত</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">হোল্ডিংধারী / দখলদার</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  " href="#">স্বেচ্ছাসেবী</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">ব্লগ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{route('contact_us')}}">যোগাযোগ</a>
                </li>
             </ul>
          </div>
          <a class="header-cta  ma-btn-primary" style="margin-right: 5px;" href="profile.html">
          প্রোফাইল
          </a>
          <a href="{{route('volunteer_apply')}}" class="header-cta  ma-btn-primary" style="background: red; color: white;">
             <!-- অভিযোগ -->
             Apply
          </a>
       </nav>
    </div>
    <!--End navbar-->
 </header>