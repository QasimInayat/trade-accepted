@extends('admin.layout.admin-scaffold')
@push('title')
Edit Vehicle Type
@endpush
@section('content')
<div class="layout-page">
   <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
         @if(Session::has('error'))
         <div class=" alert alert-danger d-flex align-items-center" role="alert">
            <span class="alert-icon text-danger me-2">
            <i class="fa fa-times"></i>
            </span>
            {{Session::get('error')}}
         </div>
         @endif
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="row">
                     <div class="col-md-6">
                        <h4 class="card-header">Vehicle Type</h4>
                     </div>
                     <div class="col-md-6">
                        <div style="float: right; margin-right: 15px;" class="mt-4">
                           <a href="{{ route('admin.vehicle_type.index') }}" class="btn btn-primary waves-effect">Back to Vehicle Type</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">

                     {!! Form::model($vehicletype, ['route' => ['admin.vehicle_type.update' , $vehicletype->slug] , 'enctype' => 'multipart/form-data' ]) !!}
                        @method('PUT')
                        <div class="row">
                           <div class="col-md-6 mt-4">
                              <div class="form-floating">
                                 {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your name', 'aria-describedby' => 'floatingInputHelp']) !!}
                                 <label for="floatingInput">Name</label>
                                 <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                              </div>
                           </div>
                           <div class="col-md-6 mt-4">
                                 <input type="file" class="form-control  p-3 " name="image">
                                 @if(!empty($vehicletype->image))
                                 <img src="{{asset('upload/image/'.$vehicletype->image)}}" alt="" width="100px" class="img-thumbnail mt-3">
                             @endif
                                 <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                           </div>
                           <div class="col-md-6 mt-4">
                              <div class="form-floating">
                                 {!! Form::select('status', ['1' => 'Active', '0' => 'Deactive'], null, ['class' => 'form-control']) !!}
                                 <label for="floatingInput">Status</label>
                                 <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                              </div>
                           </div>
                            <div class="col-md-12">
                                <div style="float: right; " class="mt-4">
                                <button type="submit" class="btn btn-primary waves-effect">Update</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
