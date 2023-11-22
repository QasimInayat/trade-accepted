@extends('layouts.scaffold')
@push('title')
Profile
@endpush
@push('styles')
<style>

.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
    .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
        input {
            display: none;
            + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;
                &:hover {
                    background: #f1f1f1;
                    border-color: #d6d6d6;
                }
                &:after {
                    content: "\f040";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }
    .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}
.imageicon{
        background-color: white;
        padding: 10px;
        border-radius: 30px;
        color: gray;
        cursor: pointer;
        margin-right: 10px;
  }
</style>
@endpush
@section('content')
    <main>
        <div class="content pe-2">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="chat-area custom-flow p-4">
                                <div class="profile-detail">
                                    <div class="edit text-end">
                                        <button class="btn btn-light bg-transparent btn-sm" data-toggle="modal" data-target="#myModal">
                                            <img src="{{asset('assets/imgs/fi_edit-3.svg')}}" class="me-1" alt="" >
                                            Edit
                                        </button>
                                    </div>
                                    <div class="profile text-center mt-3">
                                        @if (!empty(userImage()->image))
                                        <img src="{{asset('upload/user/'. userImage()->image)}}" alt="">
                                    @else
                                    <img src="{{asset('assets/imgs/placeholder1.png')}}" alt="">
                                    @endif
                                    <span class="d-block mt-3">Member Since 2018</span>
                                        <h3 class="name text-primary fw-bold mt-3">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h3>
                                        <p class="mb-1">steve.davidson@example.com</p>
                                        <p class="mb-1">+1 (456) 356 5486</p>
                                        <p class="mb-1">{{ auth()->user()->address }} </p>
                                    </div>

                                    <div class="payment-form mt-5">
                                        <h3 class="text-center">Payment Method</h3>
                                        {!! Form::model($user, ['route' => ['userprofile.update' , auth()->user()->id] , 'enctype' => 'multipart/form-data']) !!}
                                            <div class="mb-3">
                                                <label for="" class="form-label">Card Number</label>
                                                {!! Form::text('card_number', null, ['class' => 'form-control', 'id' => 'card_number' , 'placeholder' => '4242-4242-4242-4242']) !!}
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Name</label>
                                                {!! Form::text('full_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                            </div>

                                            <div class="mb-3">

                                                <label for="" class="form-label">Expiry</label>
                                                {!! Form::text('expiry', null, ['class' => 'form-control' , 'id' => 'exprationDate' , 'placeholder' => 'MM / YYYY']) !!}
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">CVC</label>
                                                {!! Form::text('cvc', null, ['class' => 'form-control' , 'id' => 'card_cvc' , 'placeholder' => 'card-cvc']) !!}
                                            </div>

                                            <div class="mb-5" style="float: right;">
                                                {{-- <button type="submit" class="btn-sm btn btn-primary">Save</button> --}}
                                            </div>
                                            <div></div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 mt-lg-0 mt-4">
                            <div class="chat-area custom-flow p-4">
                                <div class="listing-tabs">
                                    <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-active" type="button" role="tab"
                                                aria-controls="pills-active" aria-selected="true">Active
                                                Listings</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-previous-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-previous" type="button" role="tab"
                                                aria-controls="pills-previous" aria-selected="false">Previous
                                                listings</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-active" role="tabpanel"
                                            aria-labelledby="pills-active-tab">
                                            @forelse($vehicles as $item)
                                            <div class="car-list mb-4">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-5">
                                                            <a href="{{ route('detail',$item->slug) }}"><img src="{{ asset('upload/vehicle/'.mainImage($item->id)) }}" class="w-100" alt=""></a>
                                                        </div>
                                                        <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                            <h5>
                                                                <a href="{{ route('detail',$item->slug) }}">{{ $item->title }}</a>
                                                                <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                    alt="">
                                                            </h5>
                                                            <h4>${{ $item->price }}</h4>
                                                            <p class="mb-2">{{ $item->address }}. {{ $item->country_id }} {{ $item->city_id }}</p>
                                                            <div class="d-flex gap-4">
                                                                <div class="list-meta">
                                                                    <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                    254 views
                                                                </div>
                                                                <div class="list-meta">
                                                                    <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                        alt="">
                                                                    56 bookmarks
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            @empty
                                            @endforelse
                                        </div>
                                        <div class="tab-pane fade" id="pills-previous" role="tabpanel"
                                            aria-labelledby="pills-previous-tab">
                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-10.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-8.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-9.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
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

                        <div class="col-xl-3 col-lg-3 mt-lg-0 mt-4">
                            <div class="chat-area custom-flow p-4">
                                <div class="reviews">
                                    <h5 class="fw-bold">Reviews</h5>

                                    <div class="review-list mt-4">
                                        <div class="review-image d-flex justify-content-between align-items-end">
                                            <img src="{{asset('assets/imgs/user.png')}}" alt="" class="d-block users">
                                            <img src="{{asset('assets/imgs/star.png')}}" alt="">
                                        </div>
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="addListing" tabindex="-1" aria-labelledby="addListingLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 position-relative">
                <div class="text-end border-0">
                    <!-- <h1 class="modal-title fs-5" id="addListingLabel">Modal title</h1> -->
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="add-listing-form">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="text-center mb-4">My</h4>
                                    <div class="border-end pe-md-4">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Year" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Make" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Model" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Trim" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-center mb-4">For</h4>
                                    <div class="">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Year" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Make" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Model" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Trim" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3 ">
                                    <button class="btn btn-primary w-100">Find Exchange</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button style="border: none; background-color:transparent ;" type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                {!! Form::model($user, ['route' => ['userprofile.update' , auth()->user()->id] , 'enctype' => 'multipart/form-data']) !!}
                    <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <label for="imageUpload">
                                <input style="display: none;" name="image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <i class="imageicon fa fa-pencil"></i>
                                </label>
                            </div>
                            <div class="avatar-preview">
                                @if (!empty(userImage()->image))
                                <div id="imagePreview" style="background-image: url({{asset('upload/user/'. userImage()->image)}}) ;" ></div>
                                @else
                                <img id="imagePreview" src="{{asset('assets/imgs/placeholder1.png')}}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-6  mt-3col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">First Name *</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                                <small class="text-danger">@error ('first_name') {{ $message }} @enderror</small>
                            </div>
                        </div>

                        <div class="col-xl-6  mt-3col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Last Name *</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                <small class="text-danger">@error ('last_name') {{ $message }} @enderror</small>
                            </div>
                        </div>
                        <div class="col-xl-12 mt-3 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">Address *</label>
                                <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                                <small class="text-danger">@error ('address') {{ $message }} @enderror</small>
                            </div>
                        </div>

                        <div class="float-right">
                            <div class="form-group  mt-3">
                                <button type="submit" class="float-right btn text-light btn btn-primary" >Save Changes</button>
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


@endsection
@push('scripts')
<script src="{{ asset('assets/js/payment-relatedss.js') }}"></script>
<script>
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
        $(function() {
        $("#card_number").mask("9999-9999-9999-9999");
        $("#card_cvc").mask("999");
        $("#exprationDate").mask("99/9999");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@endpush
