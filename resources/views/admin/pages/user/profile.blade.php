@extends('admin.layout.admin-scaffold')
@push('title')
User Profile
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
                        <h2 class="card-header">User Profile</h2>
                     </div>
                  </div>
                  <div class="card-body">
                     @if(isset($profile))
                     {!! Form::model($profile, ['route' => ['admin.userprofile.update' , $profile->id] ,'enctype'=>'multipart/form-data']) !!}
                     @else
                     {!! Form::open(['route' => 'admin.userprofile.store' ,'enctype'=>'multipart/form-data']) !!}
                     @endif
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-floating">
                              {!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your First Name', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">First Name</label>
                              <small class="text-danger">@error ('first_name') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating">
                              {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your Last Name', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Last Name</label>
                              <small class="text-danger">@error ('last_name') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <input type="file" name="image" class="form-control p-3" name="image">
                           @isset($profile)
                           @if ($profile->image)
                           <img src="{{ asset('upload/user/'.$profile->image) }}" alt="" class="mt-3 img-thumbnail" height="50px" width="100px">
                           @endif
                           @endisset
                           <small class="text-danger">@error ('image') {{ $message }} @enderror</small>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your email', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Email</label>
                              <small class="text-danger">@error ('email') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::number('phone', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your phone', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Phone</label>
                              <small class="text-danger">@error ('phone') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your address', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Address</label>
                              <small class="text-danger">@error ('address') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::number('card_number', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your card number', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Card Number</label>
                              <small class="text-danger">@error ('card_number') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::number('expiry', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your expiry', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">Expiry</label>
                              <small class="text-danger">@error ('expiry') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-6 mt-4">
                           <div class="form-floating">
                              {!! Form::number('cvc', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your cvc', 'aria-describedby' => 'floatingInputHelp']) !!}
                              <label for="floatingInput">CVC</label>
                              <small class="text-danger">@error ('cvc') {{ $message }} @enderror</small>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div style="float: right; " class="mt-4">
                              <button type="submit" class="btn  btn-primary waves-effect">Save</button>
                           </div>
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
