@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE MONTHLY FEE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Registration Fee</li>
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
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Session<font style="color: red">*</font></label>
                            <select name="year_id" id="year_id" class="form-control form-control-sm">
                                <option value="">Select Session</option>
                                @foreach ($sessions as $session)
                                    <option value="{{$session->id}}">{{$session->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Class<font style="color: red">*</font></label>
                            <select name="class_id" id="class_id" class="form-control form-control-sm">
                                <option value="">Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Month<font style="color: red">*</font></label>
                            <select name="month" id="month" class="form-control form-control-sm">
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3" style="padding-top: 32px;">
                            <a id="search" class="btn btn-primary btn-sm" name="search">Search</a>
                        </div>
                    </div>
              </div>
              <div class="card-body">
                <div id="DocumentResults"></div>
                    <script id="document-template" type="text/x-handlebars-template">
                        <table class="table-sm table-bordered table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    @{{{thsource}}}
                                </tr>
                            </thead>
                            <tbody>
                                @{{#each this}}
                                <tr>
                                    @{{{tdsource}}}
                                </tr>
                                @{{/each}}
                            </tbody>
                        </table>
                    </script>
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
        $(document).on('click', '#search', function(){
            var year_id = $('#year_id').val();
            var class_id = $('#class_id').val();
            var month = $('#month').val();
            $('.notifyjs-corner').html('');
            if(year_id == ''){
                $.notify('Session Required!', {globalPosition: 'top right', className: 'error'});
                return false;
            }
            if(class_id == ''){
                $.notify('Class Required!', {globalPosition: 'top right', className: 'error'});
                return false;
            }
            if(month == ''){
                $.notify('Month Required!', {globalPosition: 'top right', className: 'error'});
                return false;
            }
            $.ajax({
                url: "{{route('students.monthly.fee.get-student')}}",
                type: "get",
                data: {'year_id':year_id,'class_id': class_id, 'month': month},
                beforeSend: function() {
                },
                success: function (data) {
                    var source = $("#document-template").html();
                    var template = Handlebars.compile(source);
                    var html = template(data);
                    $('#DocumentResults').html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        });
    </script>
@endsection
