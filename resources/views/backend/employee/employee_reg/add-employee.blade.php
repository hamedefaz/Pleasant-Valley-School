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
                <h3>
                @if (isset($editData))
                Edit Employee
                @else
                Add Employee
                @endif
                <a class="btn btn-success float-right btn-sm" href="{{route('employees.registration.view')}}"><i class="fa fa-list"></i>Employee List</a>
                </h3>
              </div>
            </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{(@$editData)?route('employees.registration.update',$editData->id):route('employees.registration.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Employee Name<font style="color: red">*</font></label>
                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Father's Name<font style="color: red">*</font></label>
                            <input type="text" name="fname" value="{{@$editData->fname}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mother's Name<font style="color: red">*</font></label>
                            <input type="text" name="mname" value="{{@$editData->mname}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Mobile No.<font style="color: red">*</font></label>
                            <input type="text" name="mobile" value="{{@$editData->mobile}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Email<font style="color: red">*</font></label>
                            <input type="text" name="email" value="{{@$editData->email}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address<font style="color: red">*</font></label>
                            <input type="text" name="address" value="{{@$editData->address}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Gender<font style="color: red">*</font></label>
                            <select name="gender" class="form-control form-control-sm">
                                <option value="">Select Gender</option>
                                <option value="Male" {{(@$editData->gender=='Male')?'selected':''}}>Male</option>
                                <option value="Female" {{(@$editData->gender=='Female')?'selected':''}}>Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Religion<font style="color: red">*</font></label>
                            <select name="religion" class="form-control form-control-sm">
                                <option value="">Select Religion</option>
                                <option value="Muslim" {{(@$editData->religion=='Muslim')?'selected':''}}>Muslim</option>
                                <option value="Hindu" {{(@$editData->religion=='Hindu')?'selected':''}}>Hindu</option>
                                <option value="Christian" {{(@$editData->religion=='Christian')?'selected':''}}>Christian</option>
                                <option value="Buddha" {{(@$editData->religion=='Buddha')?'selected':''}}>Buddha</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Date of Birth<font style="color: red">*</font></label>
                            <input type="text" name="dob" value="{{@$editData->dob}}" class="form-control form-control-sm singledatepicker" autocomplete="off">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Designation<font style="color: red">*</font></label>
                            <select name="designation_id" class="form-control form-control-sm">
                                <option value="">Select Designation</option>
                                @foreach ($designations as $designation)
                                    <option value="{{$designation->id}}" {{(@$editData->designation_id==$designation->id)?'selected':''}}>{{$designation->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(!@$editData)
                        <div class="form-group col-md-4">
                            <label>Salary<font style="color: red">*</font></label>
                            <input type="text" name="salary" value="{{@$editData->salary}}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Joining Date<font style="color: red">*</font></label>
                            <input type="text" name="join_date" value="{{@$editData->join_date}}" class="form-control form-control-sm singledatepicker" autocomplete="off">
                        </div>
                        @endif

                        <div class="form-group col-md-4">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control form-control-sm" id="image" >
                        </div>
                        <div class="form-group col-md-12">
                           <p style="text-align:center;"><img id="showImage" src="{{(!empty($editData->image))?url('public/upload/employee_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 300px; height: 320px; border: 2px solid #000;"></p>
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
            email: {
                required: true,
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
            salary: {
                required: true,
            },
            dob: {
                required: true,
            },
            designation_id: {
                required: true,
            },
            join_date: {
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
                required: "This field is required",
                minlength: "Mobile number must be at least 11 characters long",
            },
            email: {
                required: "This field is required",
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
            salary: {
                required: "This field is required",
            },
            dob: {
                required: "This field is required",
            },
            designation_id: {
                required: "This field is required",
            },
            join_date: {
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
