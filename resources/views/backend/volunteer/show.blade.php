@extends('backend.layout.master')
@section('title')
    Volunteer - Cleantown
@endsection

@section('content')
    
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6 offset-3">
          <h1>Volunteer Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Volunteer Form</li>
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
           

                <h3 class="profile-username text-center">{{@$volunteer->name_bn}}</h3>

                <p class="text-muted text-center">{{@$volunteer->name_en}}</p>
                <p class="text-muted text-center"> <b>Volunteer ID and Password : </b> {{@$volunteer->volunteer_id}}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Fathers Name</b> <a class="float-right">{{@$volunteer->father_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ward No</b> <a class="float-right">{{@$volunteer->ward_no}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Holding No</b> <a class="float-right"><b>{{@$volunteer->holding_no}}</b> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Flat No</b> <a class="float-right"><b>{{@$volunteer->flat_no}}</b> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="float-right"><b>{{@$volunteer->dob}}</b> </a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Record</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> NID/ Birth Certificate</strong>

                <p class="text-muted">
                  {{@$volunteer->nid}} /   {{@$volunteer->birth_cer}} 
                </p>

                <hr>
                <strong><i class="fas fa-book mr-1"></i> Phone/ Email</strong>

                <p class="text-muted">
                  {{@$volunteer->mobile_no}} /   {{@$volunteer->email}} 
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">{!!@$volunteer-> address!!}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Education</strong>

                <p class="text-muted">{!!@$volunteer->education!!}</p>

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