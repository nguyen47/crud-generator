@extends('layouts.masterLayout')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Show User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Information User
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                                                        	                            		<div class="form-group">
	                                    <label>Id</label>
                                        <p class="form-control-static">{{$user->id}}</p>
	                                </div>
                            	                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Name</label>
	                                    <p class="form-control-static">{{$user->name}}</p>
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Email</label>
	                                    <p class="form-control-static">{{$user->email}}</p>
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Password</label>
	                                    <p class="form-control-static">{{$user->password}}</p>
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Remember Token</label>
	                                    <p class="form-control-static">{{$user->remember_token}}</p>
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            	                            	                            	                            		<div class="form-group">
	                                    <label>Created At</label>
	                                    <p class="form-control-static">{{$user->created_at}}</p>
	                                </div>
                            	                                                        	                            	                            	                            	                            	                            		<div class="form-group">
	                                    <label>Updated At</label>
	                                    <p class="form-control-static">{{$user->updated_at}}</p>
	                                </div>
                            	                                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        </div>
                    <!-- /.row (nested) -->
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