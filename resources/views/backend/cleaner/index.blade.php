@extends('backend.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Landlord</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">landlord</li>
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
                <h3 class="card-title">Landlord</h3>
                
              
                <a href="{{route('landlord.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      

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
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                    @foreach ($landlord as $key=>$item) 
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td> {{@$item->name_en}}</td>
                   <td>{{$item->name_bn}}</td>

                   <td>{!!@$item->father_name!!}</td>
                   <td>{{@$item->nid}}</td>
                   <td>{{@$item->holding_no}}</td>
                   <td>{{@$item->phone}}</td>
                   <td>
            
                      <a href="{{route('landlord.edit',[$item])}}"><button title="Edit" class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                      <a href="{{route('landlord.show',[$item])}}"><button title="Show" class="btn btn-outline-primary btn-sm"><i class="fas fa-eye"></i></button></a>
                    
                      <form action="{{route('landlord.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></button>
                    </form>
                         
                    </td>
                   
                  </tr>
                
                  @endforeach

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