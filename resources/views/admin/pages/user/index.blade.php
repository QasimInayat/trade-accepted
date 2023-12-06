@extends('admin.layout.admin-scaffold')
@push('title')
User List
@endpush
@section('content')
<div class="layout-page">
    <div class="content-wrapper">
       <div class="container-xxl flex-grow-1 container-p-y">
          <div class="card">
              <div class="row">
                  <div class="col-md-6">
                      <h2 class="card-header">Users</h2>
                    </div>
                    <div class="col-md-6">
                        <div style="float: right; margin-right: 15px;" class="mt-4">
                        </div>
                    </div>
                </div>
             <div class="card-body">
                <div class="table-responsive ">
                   <table class="table table-striped table-bordered" id="table">
                      <thead>
                         <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-mail</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $index=>$user)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->is_ban == 0)
                                <button style="margin-right: 5px; border: none; color: white; font-size: 12px;" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" type="button" value="{{ $user->id }}" class="edit_button badge bg-success">Not Banned</button>
                            @else
                                <button style="margin-right: 5px; margin-left: 10px; border: none; color: white; font-size: 12px;" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" type="button" value="{{ $user->id }}" class="edit_button badge bg-danger">Banned</button>
                            @endif 
                            <a href="{{ route('admin.profile',$user->id) }}"><button class="btn btn-primary btn-sm"><i style="margin-right: 5px" class="fa fa-user"></i>Edit Profile</button></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                   </table>
                   </div>
             </div>
          </div>
       </div>
    </div>
    </div>




    {{-- User Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ban and Un Ban User</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input type="hidden" id="edit_user_id">
                    <label for="isBan/unBan">isBan/unBan</label>
                    <select name="is_ban" id="edit_is_ban" class="form-control">
                        <option value="0">Not Banned</option>
                        <option value="1">Banned</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" type="button" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary update_user" type="button">Save changes</button>
            </div>
          </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).on('click' , '.edit_button' , function(e){
    var user_id = $(this).val();
    e.preventDefault();
  $.ajax({
      type: "GET",
      url: "edit-user/"+user_id,
      success: function(response){
          if(response.status == 404){
              $('#success_message').text(response.message);
          }else{
              $('#edit_is_ban').val(response.user.is_ban);
              $('#edit_user_id').val(user_id);
          }
      }
  });
});
$(document).on('click' , '.update_user' , function (e){
            e.preventDefault();
            var user_id = $('#edit_user_id').val();
            var data = {
              'is_ban': $('#edit_is_ban').val(),
          }
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
            type: 'PUT',
            url: 'update-user/'+user_id,
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 400){
                    $.each(response.errors, function (key, err_values){
                        $('#updateform_errList').append('<li>'+err_values+'</li>');
                    });
                }else if(response.status == 404){
                    toastr.error(response.message);
                }else{
                    window.location.reload();
                    toastr.success(response.message);
                }
            }
          });
      });
</script>
@endpush
