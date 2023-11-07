@extends('admin.layout.admin-scaffold')
@push('title')
Vehicle Type
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
   @if(Session::has('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <span class="alert-icon text-success me-2">
          <i class="fa fa-check"></i>
        </span>
        {{Session::get('success')}}
      </div>
      @endif
      <div class="card">
          <div class="row">
              <div class="col-md-6">
                  <h4 class="card-header">Vehicle Type</h4>
                </div>
                <div class="col-md-6">
                    <div style="float: right; margin-right: 15px;" class="mt-4">
                        <a href="{{ route('admin.vehicle-type.create') }}" class="btn btn-primary waves-effect">Create Vehicle Type</a>
                    </div>
                </div>
            </div>
         <div class="card-body">
            <div class="table-responsive ">
               <table class="table table-striped table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($vehicletypes as $index=>$vehicletype)
                     <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $vehicletype->name }}</td>
                        <td style="width: 15%;" ><img class="" height="100px" wisth="100px" src="{{ asset('upload/logo/' . $vehicletype->logo) }}" alt=""></td>
                        <td>
                        @if($vehicletype->status == 1)
                    <span class="badge bg-label-success me-1">Active</span>
                    @else
                    <span class="badge bg-label-danger me-1">Deactive</span>
                    @endif
                        </td>
                        <td>
                           <a href="{{ route('admin.vehicle-type.edit' , $vehicletype->slug) }}"><i class="text-info fa fa-edit"></i> </a>&nbsp;|&nbsp;
                           <a href="{{ route('admin.vehicle-type.delete' , $vehicletype->slug) }}"><i class="text-danger fa fa-trash"></i></a>
                        </td>
                     </tr>
                     @empty
                     <td class="text-center" colspan="5">No data found</td>
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
