@extends('admin.layout.admin-scaffold')
@push('title')
Make
@endpush
@section('content')
<div class="layout-page">
<div class="content-wrapper">
   <div class="container-xxl flex-grow-1 container-p-y">
      <div class="card">
          <div class="row">
              <div class="col-md-6">
                  <h4 class="card-header">Makes</h4>
                </div>
                <div class="col-md-6">
                    <div style="float: right; margin-right: 15px;" class="mt-4">
                        <a href="{{ route('admin.make.create') }}" class="btn btn-primary waves-effect">Create Make</a>
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
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse($makes as $index=>$make)
                     <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $make->name }}</td>
                        <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/image/'.$make->image)}}" alt="" width="100%"></td>
                        <td>
                        @if($make->status == 1)
                    <span class="badge bg-label-success me-1">Active</span>
                    @else
                    <span class="badge bg-label-danger me-1">Deactive</span>
                    @endif
                        </td>
                        <td>
                           <a href="{{ route('admin.make.edit' , $make->slug) }}"><i class="text-info fa fa-edit"></i> </a>&nbsp;|&nbsp;
                           <a href="{{ route('admin.make.delete' , $make->slug) }}"><i class="text-danger fa fa-trash"></i></a>
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
