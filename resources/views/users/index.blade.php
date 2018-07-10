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
              <p>
                <a href="{{route('users.create')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <span><strong>Add New</strong></span>            
                </a>
              </p>
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
                                                              <th> Action </th>
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
                                                        <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                <a href="{{route('users.show', $user->id)}}" class="btn btn-primary a-btn-slide-text">
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