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
<div class="layout-page mb-5" style="margin-top:130px; ">
   <div style="margin-left: 40px;" class="content-wrapper">
      <div class="container">
        <div class="card">
            <div class="card-header text-white" style="background-color:red;">
                <a href="{{ route('index') }}"><i style="font-size: 13px;" class="fa fa-chevron-left"></i>  <span><b>Back</b></span></a>            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                       <div class="card shadow-lg p-3">
                          <div class="row">
                             <div class="col-md-12">
                                <h2 class="mt-3 text-danger text-center"><b>{{ $title ?? '' }}</b></h2>
                             </div>
                             <div class="col-md-12">
                                <p class=" text-center">Add Your Vehicle Details</p>
                             </div>
                          </div>
                          <div class="card-body">

                             {!! Form::open(['route' => 'vehicle.store' , 'enctype' => 'multipart/form-data' , 'id' => 'my-form']) !!}
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
                                        <select name="country_id" required class="form-control custom-control" id="country" onchange="print_state('state',this.selectedIndex);">
                                        </select>
                                       <label for="floatingInput text-danger">Country</label>
                                       <small class="text-danger">@error ('country_id') {{ $message }} @enderror</small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mt-4">

                                      <div class="form-floating">
                                       {!! Form::text('city_id', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'City', 'aria-describedby' => 'floatingInputHelp']) !!}
                                       <label for="floatingInput">City</label>
                                       <small class="text-danger">@error ('price') {{ $message }} @enderror</small>
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
                                        {!! Form::select('make_id', $makes, null, [ 'class' => 'form-control']) !!}
                                       <label for="floatingInput">Make</label>
                                       <small class="text-danger">@error ('make_id') {{ $message }} @enderror</small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mt-4">
                                    <div class="form-floating">
                                        {!! Form::text('model_id', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your Model', 'aria-describedby' => 'floatingInputHelp']) !!}
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
                                 <div class="col-md-6 mt-4">
                                    <div class="form-floating">
                                       {!! Form::text('from', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your From', 'aria-describedby' => 'floatingInputHelp']) !!}
                                       <label for="floatingInput">From</label>
                                       <small class="text-danger">@error ('from') {{ $message }} @enderror</small>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mt-4">
                                    <div class="form-floating">
                                       {!! Form::text('to', null, ['class' => 'form-control', 'id' => 'floatingInput', 'placeholder' => 'Enter your To', 'aria-describedby' => 'floatingInputHelp']) !!}
                                       <label for="floatingInput">To</label>
                                       <small class="text-danger">@error ('to') {{ $message }} @enderror</small>
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

                                 <div class="col-md-12 mt-4">
                                        <label for="floatingInput">Description</label>
                                        <textarea name="description" class="form-control" rows="5"  >{{ old('description') }}</textarea>
                                       <small class="text-danger">@error ('description') {{ $message }} @enderror</small>
                                 </div>
                                 <div class="col-md-12 mt-4">
                                    <div class="form-floating">
                                        {!! Form::select('status', ['0' => 'Deactive' , '1' => 'Active'], null, ['class' => 'form-control' , 'placeholder' => 'Please Select']) !!}
                                       <label for="floatingInput">Status</label>
                                       <small class="text-danger">@error ('status') {{ $message }} @enderror</small>
                                    </div>
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
   </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/js/multiple-uploader.js') }}"></script>
<script src="{{ asset('assets/js/payment-related.js') }}"></script>
<script>
        print_country("country");

    let multipleUploader = new MultipleUploader('#multiple-uploader').init({
        maxUpload : 20, // maximum number of uploaded images
        maxSize:2, // in size in mb
        filesInpName:'images', // input name sent to backend
        formSelector: '#my-form', // form selector
    });
</script>
@endpush
