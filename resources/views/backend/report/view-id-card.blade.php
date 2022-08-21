@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE STUDENT ID CARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Student ID Card</li>
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
                <h3>Search Criteria

                </h3>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="GET" action="{{route('reports.id-card.get')}}" id="myForm" target="_blank">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="year_id">Session<font style="color: red">*</font></label>
                            <select name="year_id" id="year_id" class="form-control form-control-sm">
                                <option value="">Select Session</option>
                                @foreach ($years as $year)
                                    <option value="{{$year->id}}">{{$year->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="class_id">Class<font style="color: red">*</font></label>
                            <select name="class_id" id="class_id" class="form-control form-control-sm">
                                <option value="">Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-3" style="padding-top: 32px;">
                            <button type="submit" class="btn btn-primary btn-sm" name="search">Search</button>
                        </div>
                    </div>
                </form>
              </div>

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
