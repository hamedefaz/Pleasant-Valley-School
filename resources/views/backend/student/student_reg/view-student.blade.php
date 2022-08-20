@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE STUDENTS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
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
                <h3>Student List
                    <a class="btn btn-success float-right btn-sm" href="{{route('students.registration.add')}}"><i class="fa fa-plus-circle"></i>Add Student</a>
                </h3>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="GET" action="{{route('students.session.class.wise')}}" id="myForm">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Session<font style="color: red">*</font></label>
                            <select name="year_id" class="form-control form-control-sm">
                                <option value="">Select Session</option>
                                @foreach ($sessions as $session)
                                    <option value="{{$session->id}}" {{(@$year_id==$session->id)?"selected":""}}>{{$session->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Class<font style="color: red">*</font></label>
                            <select name="class_id" class="form-control form-control-sm">
                                <option value="">Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{$class->id}}" {{(@$class_id==$class->id)?"selected":""}}>{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="padding-top: 32px;">
                            <button type="submit" class="btn btn-primary btn-sm" name="search">Search</button>
                        </div>
                    </div>
                </form>
              </div>
              <div class="card-body">
                @if(!@$search)
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='7%'>SL.</th>
                            <th>Name</th>
                            <th>ID No.</th>
                            <th>Session</th>
                            <th>Class</th>
                            <th>Image</th>
                            <th width='9%'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $key =>  $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value['student']['name']}}</td>
                            <td>{{$value['student']['id_no']}}</td>
                            <td>{{$value['session']['name']}}</td>
                            <td>{{$value['student_class']['name']}}</td>
                            <td>
                                <p style="text-align:center;"><img src="{{(!empty($value['student']['image']))?url('public/upload/student_images/'.$value['student']['image']):url('public/upload/no_image.png')}}" style="width: 70px; height: 80px;"></p>
                            </td>
                            <td>
                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('students.registration.edit',$value->student_id)}}"><i class="fa fa-edit"></i></a>
                                <a title="Promotion" class="btn btn-sm btn-success" href="{{route('students.registration.promotion',$value->student_id)}}"><i class="fa fa-check"></i></a>
                                <a target="_blank" title="Details" class="btn btn-sm btn-info" href="{{route('students.registration.details',$value->student_id)}}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width='7%'>SL.</th>
                            <th>Name</th>
                            <th>ID No.</th>
                            <th>Roll No.</th>
                            <th>Session</th>
                            <th>Class</th>
                            <th>Image</th>
                            <th width='9%'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $key =>  $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value['student']['name']}}</td>
                            <td>{{$value['student']['id_no']}}</td>
                            <td>{{$value->roll}}</td>
                            <td>{{$value['session']['name']}}</td>
                            <td>{{$value['student_class']['name']}}</td>
                            <td>
                                <p style="text-align:center;"><img src="{{(!empty($value['student']['image']))?url('public/upload/student_images/'.$value['student']['image']):url('public/upload/no_image.png')}}" style="width: 70px; height: 80px;"></p>
                            </td>
                            <td>
                                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('students.registration.edit',$value->student_id)}}"><i class="fa fa-edit"></i></a>
                                <a title="Promotion" class="btn btn-sm btn-success" href="{{route('students.registration.promotion',$value->student_id)}}"><i class="fa fa-check"></i></a>
                                <a target="_blank" title="Details" class="btn btn-sm btn-info" href="{{route('students.registration.details',$value->student_id)}}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
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

  <script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
            year_id: {
                required: true,
            },
            class_id: {
                required: true,
            }
        },
        messages: {
            year_id: {
                required: "This field is required",
            },
            class_id: {
                required: "This field is required",
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>
@endsection
