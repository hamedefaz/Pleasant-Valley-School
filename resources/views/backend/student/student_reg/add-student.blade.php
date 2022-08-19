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
                <h3>
                @if (isset($editData))
                Edit Student
                @else
                Add Student
                @endif
                <a class="btn btn-success float-right btn-sm" href="{{route('students.registration.view')}}"><i class="fa fa-list"></i>Student List</a>
                </h3>
              </div>
            </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{(@$editData)?route('students.registration.update',$editData->student_id):route('students.registration.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{(@$editData->id)}}">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Student Name<font style="color: red">*</font></label>
                            <input type="text" name="name" value="{{@$editData['student']['name']}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Father's Name<font style="color: red">*</font></label>
                            <input type="text" name="fname" value="{{@$editData['student']['fname']}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mother's Name<font style="color: red">*</font></label>
                            <input type="text" name="mname" value="{{@$editData['student']['mname']}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mobile No.<font style="color: red">*</font></label>
                            <input type="text" name="mobile" value="{{@$editData['student']['mobile']}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address<font style="color: red">*</font></label>
                            <input type="text" name="address" value="{{@$editData['student']['address']}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Gender<font style="color: red">*</font></label>
                            <select name="gender" class="form-control form-control-sm">
                                <option value="">Select Gender</option>
                                <option value="Male" {{(@$editData['student']['gender']=='Male')?'selected':''}}>Male</option>
                                <option value="Female" {{(@$editData['student']['gender']=='Female')?'selected':''}}>Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Religion<font style="color: red">*</font></label>
                            <select name="religion" class="form-control form-control-sm">
                                <option value="">Select Religion</option>
                                <option value="Muslim" {{(@$editData['student']['religion']=='Muslim')?'selected':''}}>Muslim</option>
                                <option value="Hindu" {{(@$editData['student']['religion']=='Hindu')?'selected':''}}>Hindu</option>
                                <option value="Christian" {{(@$editData['student']['religion']=='Christian')?'selected':''}}>Christian</option>
                                <option value="Buddha" {{(@$editData['student']['religion']=='Buddha')?'selected':''}}>Buddha</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Date of Birth<font style="color: red">*</font></label>
                            <input type="text" name="dob" value="{{@$editData->dob}}" class="form-control form-control-sm singledatepicker" autocomplete="off">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Session<font style="color: red">*</font></label>
                            <select name="year_id" class="form-control form-control-sm">
                                <option value="">Select Session</option>
                                @foreach ($sessions as $session)
                                    <option value="{{$session->id}}" {{(@$editData->year_id==$session->id)?'selected':''}}>{{$session->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Class<font style="color: red">*</font></label>
                            <select name="class_id" class="form-control form-control-sm">
                                <option value="">Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{$class->id}}" {{(@$editData->class_id==$class->id)?'selected':''}}>{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Shift</label>
                            <select name="shift_id" class="form-control form-control-sm">
                                <option value="">Select Shift</option>
                                @foreach ($shifts as $shift)
                                    <option value="{{$shift->id}}" {{(@$editData->shift_id==$shift->id)?'selected':''}}>{{$shift->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" >
                        </div>
                        <div class="form-group col-md-12">
                           <p style="text-align:center;"><img id="showImage" src="{{(!empty($editData['student']['image']))?url('public/upload/student_images/'.$editData['student']['image']):url('public/upload/no_image.png')}}" style="width: 300px; height: 320px; border: 2px solid #000;"></p>
                        </div>
                        <div class="form-group col-md-12" style="padding-top: 10px;">
                            <p style="text-align:center;"><button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?'Update':'Submit'}}</button></p>
                        </div>
                    </div>

                </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->


          </section>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
            name: {
                required: true,
            },
            fname: {
                required: true,
            },
            mname: {
                required: true,
            },
            mobile: {
                required: true,
                minlength: 11
            },
            address: {
                required: true,
            },
            gender: {
                required: true,
            },
            religion: {
                required: true,
            },
            dob: {
                required: true,
            },
            year_id: {
                required: true,
            },
            class_id: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "This field is required",
            },
            fname: {
                required: "This field is required",
            },
            mname: {
                required: "This field is required",
            },
            mobile: {
                required: "Please provide a new password",
                minlength: "Mobile number must be at least 11 characters long",
            },
            address: {
                required: "This field is required",
            },
            gender: {
                required: "This field is required",
            },
            religion: {
                required: "This field is required",
            },
            dob: {
                required: "This field is required",
            },
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
