@extends('backend.layout.master')
@section('title')
    Cleaner - Cleantown
@endsection

@section('content')
    
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6 offset-3">
          <h1>Cleaner Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Cleaner Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row offset-1">
        <!-- left column -->
       
          <!-- general form elements -->
         <div class="col-9">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
           

                <h3 class="profile-username text-center">{{@$cleaner->name_bn}}</h3>

                <p class="text-muted text-center">{{@$cleaner->name_en}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Fathers Name</b> <a class="float-right">{{@$cleaner->father_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Husband Name</b> <a class="float-right">{{@$cleaner->husband_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Holding No</b> <a class="float-right"><b>{{@$cleaner->holding_no}}</b> </a>
                  </li>
                  
                </ul>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Cleaner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> NID</strong>

                <p class="text-muted">
                  {{@$cleaner->nid}}
                </p>

                <hr>
                <strong><i class="fas fa-book mr-1"></i> Phone</strong>

                <p class="text-muted">
                  {{@$cleaner->phone}} 
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">{!!@$cleaner-> address!!}</p>

                <hr>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card -->

  

        </div>
        <!--/.col (left) -->
        <!-- right column -->
      
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<script>
    CKEDITOR.replace( 'address' );

</script>
@endsection