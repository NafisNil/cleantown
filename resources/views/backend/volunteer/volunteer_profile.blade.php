@extends('backend.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Volunteer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Volunteer</li>
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
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Volunteer</h3>
                
              
    
                      

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name (English)</th>
                    <th>Name (Bangla) </th>
                    <th>Fathers Name</th>
                    <th>NID</th>
                    <th>Holding No</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
               
                   
                  <tr>
                    <td>#1</td>
                    <td> {{@$volunteer->name_en}}</td>
                   <td>{{$volunteer->name_bn}}</td>

                   <td>{!!@$volunteer->father_name!!}</td>
                   <td>{{@$volunteer->nid}}</td>
                   <td>{{@$volunteer->holding_no}}</td>
                   <td>{{@$volunteer->mobile_no}}</td>

                   <td>
                      @if ($volunteer->status == '0')
                          <a href="{{route('volunteer_active', $volunteer->id)}}"><p class="text-warning">Pending</p></a>
                      @else
                      <a href="{{route('volunteer_pending', $volunteer->id)}}"><p class="text-success">Active</p></a>
                      @endif
                   </td>
                   <td>
            
                      <a href="{{route('volunteer.edit',[$volunteer])}}"><button title="Edit" class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                      <a href="{{route('volunteer.show',[$volunteer])}}"><button title="Show" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                    
                     
                         
                    </td>
                   
                  </tr>
                
            

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name (English)</th>
                    <th>Name (Bangla) </th>
                    <th>Fathers Name</th>
                    <th>NID</th>
                    <th>Holding No</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection