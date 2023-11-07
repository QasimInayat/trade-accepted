@extends('admin.layout.admin-scaffold')
@push('title')
Create Make
@endpush
@section('content')
<div class="layout-page">
   <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="row">
                     <div class="col-md-6">
                        <h4 class="card-header">Makes</h4>
                     </div>
                     <div class="col-md-6">
                        <div style="float: right; margin-right: 15px;" class="mt-4">
                           <a href="{{ route('admin.make.index') }}" class="btn btn-primary waves-effect">Back to Makes</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">

                     {!! Form::open(['route' => 'admin.make.store' , 'enctype' => 'multipart/form-data']) !!}

                        <div class="row">
                           <div class="col-md-6 mt-4">
                              <div class="form-floating">
                                 {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your name', 'aria-describedby' => 'floatingInputHelp']) !!}
                                 <label for="floatingInput">Name</label>
                                 <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                              </div>
                           </div>
                           <div class="col-md-6 mt-3">
                                <input type="file"  class="form-control  p-3 mt-2" name="image">
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
                                <button type="submit" class="btn btn-primary waves-effect">Create</button>
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
