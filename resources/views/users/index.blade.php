@extends('layouts.masterLayout')

@section('content')
<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">User</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  User Management
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                                                              <th>Id</th>
                                                              <th>Name</th>
                                                              <th>Email</th>
                                                              <th>Password</th>
                                                              <th>Remember Token</th>
                                                              <th>Created At</th>
                                                              <th>Updated At</th>
                                                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                          <tr class="odd gradeX">
                                                          <td>{{$user->id}}</td>
                                                          <td>{{$user->name}}</td>
                                                          <td>{{$user->email}}</td>
                                                          <td>{{$user->password}}</td>
                                                          <td>{{$user->remember_token}}</td>
                                                          <td>{{$user->created_at}}</td>
                                                          <td>{{$user->updated_at}}</td>
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