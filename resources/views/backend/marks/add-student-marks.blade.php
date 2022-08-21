@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE STUDENT MARKS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Student Marks</li>
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
                Edit Student Marks
                @else
                Add Student Marks
                @endif
                <a class="btn btn-success float-right btn-sm" href="{{route('marks.view')}}"><i class="fa fa-list"></i>Student Marks List</a>
                </h3>
              </div>
            </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{(@$editData)?route('marks.update',$editData->id):route('marks.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Student Name</label>
                            <select name="student_id" class="form-control form-control-sm">
                                <option value="">Select Student</option>
                                @foreach ($students as $student)
                                    <option value="{{$student->id}}" {{(@$editData->student_id==$student->id)?'selected':''}}>{{$student->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Marks</label>
                            <input type="text" name="mark_no" value="{{@$editData->mark_no}}" class="form-control form-control-sm" placeholder="Marks">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Grade Point</label>
                            <input type="text" name="grade_no" value="{{@$editData->grade_no}}" class="form-control form-control-sm" placeholder="Grade">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Class</label>
                            <select name="class_id" id="class_id" class="form-control form-control-sm">
                                <option value="">Select Class</option>
                                @foreach ($classes as $sclass)
                                    <option value="{{$sclass->id}}" {{(@$editData->class_id==$sclass->id)?'selected':''}}>{{$sclass->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Session</label>
                            <select name="year_id" id="year_id" class="form-control form-control-sm">
                                <option value="">Select Session</option>
                                @foreach ($sessions as $year)
                                    <option value="{{$year->id}}" {{(@$editData->year_id==$year->id)?'selected':''}}>{{$year->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Exam Type</label>
                            <select name="exam_type_id" id="exam_type_id" class="form-control form-control-sm">
                                <option value="">Select Exam Type</option>
                                @foreach ($examtypes as $examtype)
                                    <option value="{{$examtype->id}}" {{(@$editData->exam_type_id==$examtype->id)?'selected':''}}>{{$examtype->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Subject</label>
                            <select name="assign_subject_id" id="assign_subject_id" class="form-control form-control-sm">
                                <option value="">Select Subject</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->id}}" {{(@$editData->assign_subject_id==$subject->id)?'selected':''}}>{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4" style="padding-top: 32px;">
                            <button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?'Update':'Submit'}}</button>
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
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
            student_id: {
                required: true,
            },
            mark_no: {
                required: true,
            },
            grade_no: {
                required: true,
            },
            class_id: {
                required: true,
            },
            exam_type_id: {
                required: true,
            },
            year_id: {
                required: true,
            },
            assign_subject_id: {
                required: true,
            }
        },
        messages: {
            student_id: {
                required: "This field is required",
            },
            mark_no: {
                required: "This field is required",
            },
            grade_no: {
                required: "This field is required",
            },
            class_id: {
                required: "This field is required",
            },
            exam_type_id: {
                required: "This field is required",
            },
            year_id: {
                required: "This field is required",
            },
            assign_subject_id: {
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
