@extends('admin.layout.admin-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
    <style>
    a:hover {
        color: #e81110;
    }
    </style>
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- View sales -->
        <div class="col-xl-4 mb-4 col-lg-5 col-12">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-7">
                <div class="card-body text-nowrap">
                  <h5 class="card-title mb-0">Welcome {{ ucwords(admin()->name) }}! 🎉</h5>
                  <p class="mb-2">Best seller of the month</p>
                  <h4 class="text-primary mb-1">$48.9k</h4>
                  <a href="javascript:;" class="btn btn-primary">View Sales</a>
                </div>
              </div>
              <div class="col-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img src="{{ asset('assets/imgs/illustrations/card-advance-sale.png') }}" height="140" alt="view sales">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- View sales -->
      
        <!-- Statistics -->
        <div class="col-xl-8 mb-4 col-lg-7 col-12">
          <div class="card h-100">
            <div class="card-header">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="card-title mb-0">Statistics</h5>
                {{-- <small class="text-muted">Updated 1 month ago</small> --}}
              </div>
            </div>
            <div class="card-body">
              <div class="row gy-3">
                <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="fa fa-user ti-sm"></i></div>
                    <div class="card-info">
                      <h5 class="mb-0">{{ $totalUsers }}</h5>
                      <small>Users</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="fa fa-car ti-sm"></i></div>
                    <div class="card-info">
                      <h5 class="mb-0">{{ $totalVehicles }}</h5>
                      <small>Vehicles</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="fa fa-star ti-sm"></i></div>
                    <div class="card-info">
                      <h5 class="mb-0">20</h5>
                      <small>Reviews</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                    <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="fa fa-dollar ti-sm"></i></div>
                    <div class="card-info">
                      <h5 class="mb-0">$9745</h5>
                      <small>Transactions</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      
      
      
      </div>
    <div class="row">
        


          <div class="col-12 col-xl-12 mb-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="mb-0">Trade-accepted Reports</h5>
                </div>
                
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
                      <div class="badge bg-label-secondary rounded p-2"><i class="fa fa-user ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2">Users</h6>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false">
                      <div class="badge bg-label-secondary rounded p-2"><i class="fa fa-car ti-sm"></i></div>
                      <h6 class="tab-widget-title mb-0 mt-2"> Vehicles</h6>
                    </a>
                  </li>
                </ul>
                <div class="tab-content p-0 ms-0 ms-sm-2">
                  <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                    <div class="mt-3">
                        <div class="">
                            <h4><b>RECENT USERS</b></h4>
                        </div>
                        <div class="">
                            <div class="table-responsive ">
                               <table class="table table-hover" id="table">
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
                               <div style="float: right; margin-top: 10px;">
                                <a href="{{ route('admin.user') }}">View all</a>
                            </div>
                         </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                    <div class="mt-3">
                        <div class="">
                            <h4><b>RECENT VEHICLES</b></h4>
                        </div>
                        <div class="table-responsive ">
                            <div class="">
                                <div class="table-responsive ">
                                   <table class="table table-hover">
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
                                <div style="float: right; margin-top: 10px;">
                                    <a href="{{ route('admin.vehicle.index') }}">View all</a>
                                </div>
                             </div>
                         </div>
                    </div>
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
