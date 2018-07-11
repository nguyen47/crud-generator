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
                                <button href="#" class="delete-modal btn btn-danger" data-id="{{$user->id}}">
                                 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                  <span><strong>Delete</strong></span>            
                                </button>
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


<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Are you sure you want to delete the following post?</h3>
                <br />
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                        <span id="" class='glyphicon glyphicon-trash'></span> Delete
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h3 class="text-center">Are you sure you want to delete the following post?</h3>
        <br />
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id_delete" disabled>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger delete" data-dismiss="modal">
            <span id="" class='glyphicon glyphicon-trash'></span> Delete
          </button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Close
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
{{ csrf_field() }}
@endsection
@section('js')
  <script type="text/javascript">
    $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Delete');
            $('#id_delete').val($(this).data('id'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();
        });
        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'DELETE',
                url: 'users/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    location.reload();
                }
            });
        });
  </script>
@endsection

