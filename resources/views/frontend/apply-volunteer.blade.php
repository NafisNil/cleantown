@extends('frontend.layout.master')
@section('title')
    Volunteer Apply  - Cleantown
@endsection
@section('content')
          <!-- Start  hero Section-->
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
                      Apply form
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
                         <li class="active">Apply</li>
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
                         <h3 class>Registation</h3>
                      </div>
                      <div class="card-body">
                         <form
                            action="{{route('volunteer.store')}}"
                            method="POST" enctype="multipart/form-data">
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
                               <div class="form-group col-md-2">
                                  <label for="exampleInputEmail1"> <b>
                                  হোল্ডিং নং </b> </label>
                                  <input type="text"
                                     class="form-control"
                                     name="holding_no"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                               <div class="form-group col-md-2">
                                  <label for="exampleInputEmail1"> <b>
                                  ফ্ল্যাট নং </b> </label>
                                  <input type="text"
                                     class="form-control"
                                     name="flat_no"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                               <div class="form-group col-md-4">
                                  <label for="exampleInputEmail1"> <b>
                                  জন্ম তারিখ </b> </label>
                                  <input type="date"
                                     class="form-control"
                                     name="dob"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  এন আই ডি (ইংরেজিতে) <span
                                     class="text-danger">*</span>
                                  </b> </label>
                                  <input type="number"
                                     class="form-control" name="nid"
                                     aria-describedby="emailHelp"
                                     placeholder required>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  জন্ম নিবন্ধন (ইংরেজিতে) <span
                                     class="text-danger">*</span>
                                  </b> </label>
                                  <input type="number"
                                     class="form-control" name="birth_certificate"
                                     aria-describedby="emailHelp"
                                     placeholder required>
                               </div>
                               <!--   <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                          পাসপোর্ট নং (ইংরেজিতে)</b>
                                  </label>
                                  <input type="number"
                                      class="form-control"
                                      name="passport"
                                     
                                      aria-describedby="emailHelp"
                                      placeholder>
                                  </div> -->
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  নাম (বাংলায় ) <span
                                     class="text-danger">*</span>
                                  </b> </label>
                                  <input type="text"
                                     class="form-control" name="name_bn"
                                     aria-describedby="emailHelp"
                                     placeholder required>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  নাম (ইংরেজিতে)</b> </label>
                                  <input type="text"
                                     class="form-control"
                                     name="name_en"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  পিতার নাম (বাংলায় ) <span
                                     class="text-danger">*</span>
                                  </b> </label>
                                  <input type="text"
                                     class="form-control"
                                     name="father_name"
                                     aria-describedby="emailHelp"
                                     placeholder required>
                               </div>
                            </div>
                            <hr>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  ওয়ার্ড নং (ইংরেজিতে) </b>
                                  </label>
                                  <input type="number"
                                     class="form-control"
                                     name="ward_no" min="0" max="9"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  মোবাইল নং<span
                                     class="text-danger">*</span>
                                  </b> </label>
                                  <input type="tel"
                                     class="form-control"
                                     name="mobile_no"
                                     aria-describedby="emailHelp"
                                     placeholder required>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  ইমেইল (যদি থাকে) </b>
                                  </label>
                                  <input type="text"
                                     class="form-control"
                                     name="email"
                                     aria-describedby="emailHelp"
                                     placeholder>
                               </div>
                            </div>
                            <div class="row">
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  ঠিকানা</b> </label>
                                  <textarea name="address" id
                                     cols="4" rows="4"
                                     placeholder="Examples: Freedom fighter children, widows, tribals ..... etc."
                                     class="form-control"></textarea>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="exampleInputEmail1"> <b>
                                  শিক্ষাগত যোগ্যতা</b> </label>
                                  <textarea name="education" id
                                     cols="4" rows="4"
                                     placeholder="Examples: Freedom fighter children, widows, tribals ..... etc."
                                     class="form-control"></textarea>
                               </div>
                            </div>
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