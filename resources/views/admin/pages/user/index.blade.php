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
                            <td><a href="{{ route('admin.profile',$user->id) }}"><button class="btn btn-primary btn-sm"><i style="margin-right: 5px" class="fa fa-user"></i>Edit Profile</button></a></td>
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
@endsection
