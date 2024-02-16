@extends('admin.layout.admin-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="card">
          <div class="row">
              <div class="col-md-6">
                  <h4 class="card-header">{{ $title ?? '' }}</h4>
                </div>
                <div class="col-md-6">
                    <div style="float: right; margin-right: 15px;" class="mt-4">
                        <a href="{{ route('admin.vehicle.create') }}" class="btn btn-primary">Create Vehicle</a>
                    </div>
                </div>
            </div>
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
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($vehicles as $index=>$item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ isset($item->user) ? $item->user->first_name : '' }} {{ isset($item->user) ? $item->user->last_name : '-' }}</td>
                            <td>{{ $item->title }}</td>
                            <td><img style="border-radius:10px;" height="70px" width="100px" src="{{ asset('upload/vehicle/'.mainImage($item->id)) }}" alt=""></td>
                            <td>${{ number_format($item->price) }}</td>
                            <td>{{ $item->make->name }}</td>
                            <td>{{ $item->model_id }}</td>
                            <td>
                                @if ($item->status == 0)
                                <span class="badge bg-danger">Deactive</span>
                                @else
                                <span class="badge bg-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('detail',$item->slug) }}"><i class="fa fa-eye text-success"></i></a>&nbsp;|&nbsp;
                                <a href="{{ route('admin.vehicle.edit',$item->id) }}"><i class="fa fa-edit text-info"></i></a>&nbsp;|&nbsp;
                                <a href="{{ route('admin.vehicle.delete',$item->id) }}"><i class="fa fa-trash text-danger"></i></a>
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
@endsection
