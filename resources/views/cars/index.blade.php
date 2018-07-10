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
                                                              <th> Action </th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($cars as $car)
                          <tr class="odd gradeX">
                                                          <td>{{$car->id}}</td>
                                                          <td>{{$car->title}}</td>
                                                          <td>{{$car->description}}</td>
                                                        <td>
                                <a href="#" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                <a href="#" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    <span><strong>View</strong></span>            
                                </a>
                                <a href="#" class="btn btn-danger a-btn-slide-text">
                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    <span><strong>Delete</strong></span>            
                                </a>
                            </td>
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