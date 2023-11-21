@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css">

<style>
    .multiple-uploader {
        width: 100%;
    }
    .image-container {
        margin: 10px;
        width: 100px;
        height: 100px;
        position: relative;
        cursor: auto;
        pointer-events: unset;
    }
    .image-preview {
        height: 100px;
        width : 100px
    }
    .multiple-uploader {
        border: 2px dashed lightgrey;
    }
    </style>
@endpush
@section('content')
<div class="layout-page mb-5" style="margin-top:130px; margin-left:70px;">
    <div class="content-wrapper">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="card shadow-lg p-3">
                  <div class="row">
                     <div class="col-md-6">
                        <h2 class="mt-3">{{ $title ?? '' }}</h2>
                     </div>
                     <div class="col-md-6">
                        <div style="float: right; margin-right: 15px;" class="mt-4">
                           <a href="{{ route('vehicle.index') }}" class="btn btn-primary waves-effect">Back to Listing</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                    {!! Form::model($vehicle, ['route' => ['vehicle.update' , $vehicle->id], 'enctype' => 'multipart/form-data' , 'id' => 'my-form']) !!}
                    @method('PUT')
                     <div class="row">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your title', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Title</label>
                               <small class="text-danger">@error ('title') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('price', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your price', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Price</label>
                               <small class="text-danger">@error ('price') {{ $message }} @enderror</small>
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
                                <select name="country_id" id="" class="form-control">
                                    <option value="1">Pakistan</option>
                                    <option value="2">India</option>
                                </select>
                               <label for="floatingInput">Country</label>
                               <small class="text-danger">@error ('country_id') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                                <select name="city_id" id="" class="form-control">
                                    <option value="1">Karachi</option>
                                    <option value="2">Lahore</option>
                                    <option value="3">UP</option>
                                    <option value="4">Bihar</option>
                                </select>
                               <label for="floatingInput">City</label>
                               <small class="text-danger">@error ('city_id') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('mileage', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your mileage', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Mileage</label>
                               <small class="text-danger">@error ('mileage') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('transmission', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your transmission', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Transmission</label>
                               <small class="text-danger">@error ('transmission') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('exterior_color', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your exterior_color', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Exterior Color</label>
                               <small class="text-danger">@error ('exterior_color') {{ $message }} @enderror</small>
                            </div>
                         </div>

                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('interior_color', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your interior_color', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Interior Color</label>
                               <small class="text-danger">@error ('interior_color') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                                <select name="make_id" id="" class="form-control">
                                    @forelse ($makes as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                               <label for="floatingInput">Make</label>
                               <small class="text-danger">@error ('make_id') {{ $message }} @enderror</small>
                            </div>
                         </div>

                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                                <select name="model_id" id="" class="form-control">
                                    <option value="1">Toyota</option>
                                    <option value="2">Corola</option>
                                    <option value="3">Honda</option>
                                    <option value="4">Civic</option>
                                </select>
                               <label for="floatingInput">Model</label>
                               <small class="text-danger">@error ('model_id') {{ $message }} @enderror</small>
                            </div>
                         </div>

                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('trim', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your trim', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Trim</label>
                               <small class="text-danger">@error ('trim') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('fuel', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your Fuel', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Fuel</label>
                               <small class="text-danger">@error ('fuel') {{ $message }} @enderror</small>
                            </div>
                         </div>
                         <div class="col-md-6 mt-4">
                            <div class="form-floating">
                               {!! Form::text('year', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your year', 'aria-describedby' => 'floatingInputHelp']) !!}
                               <label for="floatingInput">Year</label>
                               <small class="text-danger">@error ('year') {{ $message }} @enderror</small>
                            </div>
                         </div>

                         <div class="col-md-12 mt-4">
                                <div class="multiple-uploader" id="multiple-uploader">
                                    <div class="mup-msg">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                        <span class="mup-main-msg">Click to upload images.</span>
                                        <label for="" style="display: none;">
                                        <input type="file" name="images[]" id="" accept="image/*" class="form-control" multiple>
            
                                        </label>
                                    </div>
                                </div>
                               <div class="row">
                               @foreach ($galleries as $gallery)
                                <div class="col-md-2">
                                    <div style="border: 1px solid lightgrey; padding: 5px; text-align: center;" class="mt-3">
                                    <img src="{{ asset('upload/vehicle/'.$gallery->image) }}" style="height: 90px; width: 100%;" alt="">
                                    <a href="{{ route('remove.gallery',$gallery->id) }}" class="remove_gallery"><small>Remove Image</small></a><br>
                                    <input type="radio" name="is_main" class="mt-3"  @if($gallery->is_main == 1)  checked @endif value="{{$gallery->id}}">
                                </div>
                               </div>
                               @endforeach
                            </div>
                               <small class="text-danger">@error ('images[]') {{ $message }} @enderror</small>
                            </div>
                         </div>

                         <div class="col-md-12 mt-4">
                             <label for="floatingInput">Description</label>
                                <textarea name="description" class="form-control" id="" rows="5">{{ $vehicle->description }}</textarea>
                               <small class="text-danger">@error ('description') {{ $message }} @enderror</small>
                         </div>
                         <div class="col-md-12 mt-4">
                            <div style="float: right;">
                                <button class="btn btn-primary">Save</button>
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
@push('scripts')
<script src="{{ asset('assets/js/multiple-uploader.js') }}"></script>
<script>

    let multipleUploader = new MultipleUploader('#multiple-uploader').init({
        maxUpload : 20, // maximum number of uploaded images
        maxSize:2, // in size in mb
        filesInpName:'images', // input name sent to backend
        formSelector: '#my-form', // form selector
    });
</script>
@endpush