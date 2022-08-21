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
                  <h3>Student Marks List
                      <a class="btn btn-success float-right btn-sm" href="{{route('marks.add')}}"><i class="fa fa-plus-circle"></i>Add Student Marks</a>
                  </h3>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Student Name</th>
                                <th>ID No.</th>
                                <th>Class</th>
                                <th>Session</th>
                                <th>Exam Type</th>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key =>  $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value['user']['name']}}</td>
                                <td>{{$value['user']['id_no']}}</td>
                                <td>{{$value['sclass']['name']}}</td>
                                <td>{{$value['year']['name']}}</td>
                                <td>{{$value['examtype']['name']}}</td>
                                <td>{{$value['subject']['name']}}</td>
                                <td>{{$value->marks}}</td>
                                <td>{{$value->grade}}</td>
                                <td>
                                    <a title="Edit" class="btn btn-sm btn-primary" href="{{route('marks.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
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
