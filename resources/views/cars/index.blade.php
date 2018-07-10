@extends('layouts.masterLayout')

@section('content')
<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Car</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Car Management
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                                                              <th>Id</th>
                                                              <th>Title</th>
                                                              <th>Description</th>
                                                        </tr>
                      </thead>
                      <tbody>
                      @foreach($cars as $car)
                          <tr class="odd gradeX">
                                                          <td>{{$car->id}}</td>
                                                          <td>{{$car->title}}</td>
                                                          <td>{{$car->description}}</td>
                                                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
@endsection