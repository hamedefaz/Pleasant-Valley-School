@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE EMPLOYEES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-md-12">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3>Employee List
                      <a class="btn btn-success float-right btn-sm" href="{{route('employees.registration.add')}}"><i class="fa fa-plus-circle"></i>Add Employee</a>
                  </h3>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>SL.</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>ID No.</th>
                              <th>Mobile No.</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Gender</th>
                              <th>Joining Date</th>
                              <th>Salary ($USD)</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($allData as $key =>  $value)
                          <tr>
                              <td>{{$key+1}}</td>
                              <td>
                                <p style="text-align:center;"><img src="{{(!empty($value->image))?url('public/upload/employee_images/'.$value->image):url('public/upload/no_image.png')}}" style="width: 80px; height: 90px;"></p>
                            </td>
                              <td>{{$value->name}}</td>
                              <td>{{$value['designation']['name']}}</td>
                              <td>{{$value->id_no}}</td>
                              <td>{{$value->mobile}}</td>
                              <td>{{$value->email}}</td>
                              <td>{{$value->address}}</td>
                              <td>{{$value->gender}}</td>
                              <td>{{date('d-m-Y', strtotime($value->join_date))}}</td>
                              <td>{{$value->salary}}</td>
                              <td>
                                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('employees.registration.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
                                  <a target="_blank" title="Details" class="btn btn-sm btn-success" href="{{route('employees.registration.details',$value->id)}}"><i class="fa fa-eye"></i></a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->


            </section>

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  @endsection
