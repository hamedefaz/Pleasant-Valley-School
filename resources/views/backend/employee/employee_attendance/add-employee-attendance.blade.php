@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE EMPLOYEE ATTENDANCE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Employee Attendance</li>
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
                        Edit Employee Attendance
                        @else
                        Add Employee Attendance
                        @endif
                        <a class="btn btn-success float-right btn-sm" href="{{route('employees.attendance.view')}}"><i class="fa fa-list"></i>Employee Attendance List</a>
                    </h3>
                  </div>
                </div><!-- /.card-header -->
                <form method="post" action="{{route('employees.attendance.store')}}" id="myForm">
                    @csrf
                    <div class="card-body">
                        <div class="form-group col-md-4">
                            <label class="control-label">Attendance Date</label>
                            <input type="text" name="date" id="date" class="checkdate form-control form-control-sm singledatepicker" placeholder="Attendance Date" autocomplete="off">
                        </div>
                        <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center" style="vertical-align: middle;">SL.</th>
                                    <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee Name</th>
                                    <th colspan="3" class="text-center" style="vertical-align: middle; width: 25%">Attendance Status</th>
                                </tr>
                                <tr>
                                    <th class="text-center btn present_all" style="display: table-cell; background-color: #FFA500"><font style="color: black; font-weight: bold">Present</font></th>
                                    <th class="text-center btn present_all" style="display: table-cell; background-color: #FFA500"><font style="color: black; font-weight: bold">Leave</font></th>
                                    <th class="text-center btn present_all" style="display: table-cell; background-color: #FFA500"><font style="color: black; font-weight: bold">Absent</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr id="div{{$employee->id}}" class="text-center">
                                    <input type="hidden" name="employee_id[]" value="{{$employee->id}}" class="employee_id">
                                    <td>{{$key+1}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td colspan="3">
                                        <div class="switch-toggle switch-3 switch-candy">
                                            <input class="present" id="present{{$key}}" name="attend_status{{$key}}" value="Present" type="radio" checked="checked"/>
                                            <label for="present{{$key}}">Present</label>

                                            <input class="leave" id="leave{{$key}}" name="attend_status{{$key}}" value="Leave" type="radio"/>
                                            <label for="leave{{$key}}">Leave</label>

                                            <input class="absent" id="absent{{$key}}" name="attend_status{{$key}}" value="Absent" type="radio"/>
                                            <label for="absent{{$key}}">Absent</label>
                                            <a></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table><br/>

                        <button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?'Update':'Submit'}}</button>
                    </div>
                </form>
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
                date: {
                    required: true,
                }
            },
            messages: {
                date: {
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
