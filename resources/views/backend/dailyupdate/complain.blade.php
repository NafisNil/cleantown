@extends('backend.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Daily Update - Complain</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daily Update - Complain</li>
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
                <h3 class="card-title">Daily Update - Complain</h3>
                
              @if (@Auth::user()->role == "volunteer")
              
                <a href="{{route('dailyupdate.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                          
              @endif

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Holding No</th>
                    <th>Volunteer Name</th>
                    <th>Volunteer ID</th>
                    <th>Holding No</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Complain Status</th>
                    <th>Date</th>
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                    @foreach ($dailyupdate as $key=>$item) 
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td>    @php
                      $landlord = App\Models\Landlord::where('holding_no', $item->holding_no)->get();
                  @endphp
                  @foreach ($landlord as $land)
                      <p>{{$land->name_bn}}</p><br>
                  @endforeach
                </td>
                   <td>{{$item->holding_no}}</td>

                   <td>
                    @php
                        $volunteer = App\Models\Volunteer::where('volunteer_id', $item->volunteer_id)->first();
                    @endphp
                    {{$volunteer->name_bn}}
                   </td>
                   <td>{{@$item->volunteer_id}}</td>
                   <td>{{@$item->holding_no}}</td>
                   <td> <a href="<img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" "><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" style="max-height:150px;max-width:200px"></a> </td>
                   <td>
                    @if ($item->status == 'A')
                    <p style="color: green">পরিষ্কার </p>
                    @elseif($item->status == 'B')
                    <p style="color: rgb(156, 156, 8)">অপরিষ্কার </p>
                    @elseif($item->status == 'C')
                    <p style="color: red">খুবই অপরিষ্কার</p>
                    @endif
                 </td>
                 <td>
                  @if ($item->complain == '0')
                      No complain!
                  @else
                     <p style="color: brown"> <b> &nbsp; Complained by user!</b></p>
                  @endif
                 </td>
                 <td>{{$item->created_at->format('d M, Y')}}</td>
                   <td>
  
                         @if (@Auth::user()->role == "admin" || @Auth::user()->role == "volunteer")
                             No action!
                         @else
                             <a href="{{route('complain.store', $item->id)}}" class="btn btn-sm btn-danger">Complain</a>
                         @endif
                    </td>
                   
                  </tr>
                
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Holding No</th>
                    <th>Volunteer Name</th>
                    <th>Volunteer ID</th>
                    <th>Holding No</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Complain Status</th>
                    <th>Date</th>
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