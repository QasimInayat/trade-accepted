@extends('admin.layout.admin-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- Website Analytics -->
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">No Of Users</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">{{ $totalUsers }}</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <small class="d-block mb-1 text-muted">No of Active Listings</small>
                </div>
            </div>
            <div div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="card-title mb-1">{{ $totalVehicles }}</h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <div class="progress w-100" style="height: 8px;">
                    <div class="progress-bar bg-primary" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card p-3">
                <div class="card-title">
                    <h4><b>RECENT USERS</b></h4>
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
                                <th>IsBan</th>
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
                                    <button style="border: none; color: white; font-size: 12px;" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" type="button" value="{{ $user->id }}" class="edit_button badge bg-success">Not Banned</button>
                                @else
                                    <button style="border: none; color: white; font-size: 12px;" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" type="button" value="{{ $user->id }}" class="edit_button badge bg-danger">Banned</button>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                       </table>
                       </div>
                 </div>
              </div>
          </div>

        <!--/ Website Analytics -->

        <div class="col-md-12 mt-3">
            <div class="card p-3">
                <div class="card-title">
                    <h4><b>RECENT VEHICLES</b></h4>
                </div>
                <div class="table-responsive ">
                    <div class="card-body">
                        <div class="table-responsive ">
                           <table class="table table-striped table-bordered">
                                <thead>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    @forelse($vehicles as $index=>$item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ isset($item->user) ? $item->user->first_name : '' }} {{ isset($item->user) ? $item->user->last_name : '-' }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><img style="border-radius:10px;" height="70px" width="100px" src="{{ asset('upload/vehicle/'.mainImage($item->id)) }}" alt=""></td>
                                        <td>${{ $item->price }}</td>
                                        <td>{{ $item->make->name }}</td>
                                        <td>{{ $item->model_id }}</td>
                                        <td>
                                            @if ($item->status == 0)
                                            <span class="badge bg-danger">Deactive</span>
                                            @else
                                            <span class="badge bg-success">Active</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                           </table>
                        </div>
                     </div>
                 </div>
            </div>
        </div>





      </div>
   </div>
</div>
</div>
@endsection
