@extends('layouts.masterLayout')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit User
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::open(['route' => ['users.update', $user->id],'method' => 'PUT']) }}
                                                        	                            		<div class="form-group">
	                                    <label>Id</label>
	                                    <input type="text" class="form-control" name="id" id="id" value="{{$user->id}}" readonly>
	                                </div>
                            	                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Name</label>
	                                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Email</label>
	                                    <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Password</label>
	                                    <input type="text" class="form-control" name="password" id="password" value="{{$user->password}}">
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            		<div class="form-group">
	                                    <label>Remember Token</label>
	                                    <input type="text" class="form-control" name="remember_token" id="remember_token" value="{{$user->remember_token}}">
	                                </div>
                            	                            	                            	                            	                                                        	                            	                            	                            	                            	                            		<div class="form-group">
	                                    <label>Created At</label>
	                                    <input type="text" class="form-control" name="created_at" id="created_at" value="{{$user->created_at}}">
	                                </div>
                            	                                                        	                            	                            	                            	                            	                            		<div class="form-group">
	                                    <label>Updated At</label>
	                                    <input type="text" class="form-control" name="updated_at" id="updated_at" value="{{$user->updated_at}}">
	                                </div>
                            	                                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            {{ Form::close() }}
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