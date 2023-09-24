@extends('frontend.layout.master')
@section('title')
    Volunteer Apply  - Cleantown
@endsection
@section('content')
<section class="d-flex align-items-center page-hero inner-page-hero "
id="page-hero">
<div class="overlay-photo-image-bg "></div>
<div class="overlay-color"></div>
<div class="container">
   <div class="row">
      <div class="col-12 hero-text-area">
         <h1 class="hero-title words chars splitting"
            data-splitting
            style="--word-total: 2; --char-total: 9;">
            User Login
         </h1>
         <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp"
               data-wow-delay="1s"
               style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
               <li class="breadcrumb-item">
                  <a
                     class href="#0">
                  <i
                     class="fas fa-home icon "></i>home
                  //
                  </a>
               </li>
               <li class="active">User Login</li>
            </ul>
         </nav>
      </div>
   </div>
</div>
</section>
<!-- End  hero Section-->
<!-- start  apply form Section-->
<section class="apply-form mega-section">
<div class="container">
   <style>
      label{
      /* font-weight: bold; */
      margin-bottom: 10px;
      }
      form .row{
      margin-top: 20px;
      }
   </style>
   @include('backend.sessionMsg')
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h3 class>Login Form</h3>
            </div>
            <div class="card-body">
               <form
                  action="{{route('user_login')}}"
                  method="GET" enctype="multipart/form-data">
                  @csrf                              
                  <div class="row">
                     <!--    <div class="form-group col-md-8">
                        <label for="exampleInputEmail1"> <b>
                                ছবি <span
                                    class="text-danger">*</span>
                            </b> </label>
                        <input type="file"
                            class="form-control"
                            name="photo"
                           
                            aria-describedby="emailHelp"
                            placeholder="Enter photo"
                            required>
                        </div> -->
                     <div class="form-group col-md-12 mb-5">
                        <label for="exampleInputEmail1"> <b>
                       আইডি </b> </label>
                        <input type="text"
                           class="form-control"
                           name="user_id"
                           aria-describedby="emailHelp"
                           placeholder required>
                     </div>
                 <br>  <br>
                  <button class="btn btn-outline-success"
                     type="submit">দাখিল করুন</button>
               </form>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card-->
      </div>
      <!-- end col -->
   </div>
</div>
</section>
<!-- End  apply form Section-->
@endsection