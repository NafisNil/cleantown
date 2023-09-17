<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- fav icon -->
      <link rel="icon" href="{{asset('frontend')}}/assets/images/fav-icon/fav-icon.png">
      <!-- bootstarp -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/bootstrap.min.css">
      <!-- Fancybox -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/jquery.fancybox.min.css">
      <!-- animate.css file -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/animate.css">
      <!-- Swiper -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/swiper.min.css">
      <!-- fontAwesome -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/all.min.css">
      <!-- Splitting -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/vendors/splitting.css">
      <!-- Font Family -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900">
      <!-- styles-LTR -->
      <link rel="stylesheet" href="{{asset('frontend')}}/frontend/css/styles-ltr.css">
      <title>Cleantown </title>
      <link rel="canonical" href="http://cleantown.panchbibimunicipality.com" />
   </head>
   <body class=" overlay-is-linear-gradient ">
      <!--Start Page Header-->
@include('frontend.layout.header')
      <!--End Page Header-->
     @yield('content')
      <!-- End  take-action Section-->
      <!-- Start  page-footer Section-->
@include('frontend.layout.footer')
      <!-- End  page-footer Section-->
      <!-- Start loading-screen Component-->
      <div class="loading-screen" id="loading-screen">
         <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
         </div>
      </div>
      <!-- End loading-screen Component-->
      <!-- Start back-to-top Component-->
      <div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
      <!-- End back-to-top Component-->
      <!--     JQuery     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/jquery-3.6.1.min.js"></script>
      <!--     bootstrap     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/bootstrap.bundle.min.js"></script>
      <!--     fancybox     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/jquery.fancybox.min.js"></script>
      <!--     countTo     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/jquery.countTo.js"></script>
      <!--     wow     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/wow.min.js"></script>
      <!--     swiper     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/swiper.min.js"></script>
      <!--     isotope     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/isotope-min.js"></script>
      <!--     Splitting     -->
      <script src="{{asset('frontend')}}/frontend/js/vendors/splitting.min.js"></script>
      <!--     main     -->
      <script src="{{asset('frontend')}}/frontend/js/main.js"></script>
   </body>
