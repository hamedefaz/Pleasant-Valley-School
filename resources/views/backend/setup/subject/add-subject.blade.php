@extends('backend.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MANAGE STUDENT SUBJECT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/login')}}">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
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
                Edit Student Subject
                @else
                Add Student Subject
                @endif
                <a class="btn btn-success float-right btn-sm" href="{{route('setups.subject.view')}}"><i class="fa fa-list"></i>Student Subject List</a>
                </h3>
              </div>
            </div><!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{(@$editData)?route('setups.subject.update',$editData->id):route('setups.subject.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Subject</label>
                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control">
                            <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 30px;">
                            <button type="submit" class="btn btn-primary">{{(@$editData)?'Update':'Submit'}}</button>
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

@endsection
