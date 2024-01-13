@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
    <style>
        #social-links ul li{
            display: inline-block;
        }
        #social-links ul li a{
            padding: 20px;
            margin: 2px;
            font-size: 30px;
            color: #E81110;
        }
        #social-links ul li a:hover{
            background-color: #E81110;
            color: white;
        }
    </style>
@endpush
@section('content')

    <main>
        <div class="content pe-2">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-12">
                        <a href="{{ route('index') }}" class="back"><i class="fa fa-chevron-left text-primary me-2"></i>
                            Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="car-slider">
                            @forelse ($galleries as $gallery)
                            <div>
                                <img  class="w-100" src="{{ asset('upload/vehicle/'.$gallery->image) }}" alt="">
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="car-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2>{{ ucwords($vehicle->title) }}</h2>
                                <div class="row">
                                    <div class="col-md-6" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" style="cursor: pointer;">
                                        <span>
                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" alt="">
                                        </span>
                                    </div>
                                    @auth
                                    <div class="col-md-6">
                                        <span>
                                            @php $countFavourite = 0 @endphp
                                                    @if (Auth::check())
                                                        @php
                                                            $countFavourite = App\Models\Favourite::countFavourite($vehicle['id']);
                                                        @endphp
                                                    @endif
                                                    <a style="cursor: pointer;"  data-vehicleid="{{ $vehicle->id }}" class="ms-1 update-favourite">
                                                        @if ($countFavourite > 0)
                                                        <i style="font-size: 13px; margin-left: -5px; color: red; margin-bottom: 7px;" class="fa fa-bookmark"></i>
                                                        @else
                                                        <i style="font-size: 13px; margin-left: -5px; color: red; margin-bottom: 7px" class="fa fa-bookmark-o"></i>
                                                            @endif
                                                    </a>
                                            {{-- <img src="{{asset('assets/imgs/fi_bookmark-red.svg')}}" alt=""> --}}
                                        </span>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                            <div class="price d-flex align-items-end gap-4 mt-3">
                                <h4 class="mb-0">${{ number_format($vehicle->price) }}</h4>
                                <p class="mb-0">{{ Carbon\Carbon::parse($vehicle->created_at)->diffForHumans() }} . {{ $vehicle->country_id }} {{ $vehicle->city_id }}</p>
                            </div>
                            <div class="desc mt-5">
                                <h5>Description</h5>
                                <p>{!! $vehicle->description !!}</p>
                            </div>

                            <div class="desc mt-5">
                                <h5>Seller Information</h5>
                                <div class="seller d-flex justify-content-between align-items-center mt-4">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="seller-img">
                                            @if (!empty($vehicle->user->image))
                                            <img src="{{asset('upload/user/'. $vehicle->user->image)}}" alt="" style="height: 80px; width: 80px;" class="rounded-circle">
                                        @else
                                             <img src="{{asset('assets/imgs/placeholder1.png')}}" alt="" style="height: 80px; width: 80px;" class="rounded-circle">
                                        @endif
                                        </div>
                                        <div class="seller-info">
                                            <h5><a href="{{ route('user.vehicle',$vehicle->user->full_name) }}">{{ $vehicle->user->first_name }} {{ $vehicle->user->last_name }}</a></h5>
                                            <p class="mb-0 fw-bold">Manual</p>
                                        </div>
                                    </div>
                                    <form action="{{ route('thread.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                        <input type="hidden" name="to_id" value="{{ $vehicle->user_id }}">
                                        <button type="post" class="btn btn-primary px-4">Contact</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="car-meta">
                            <h4 class="mb-3">Details</h4>
                            <div class="meta-desc">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Mileage</p>
                                        <p class="title text-primary">{{ $vehicle->mileage }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Transmission</p>
                                        <p class="title text-primary">{{ $vehicle->transmission }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Exterior Color</p>
                                        <p class="title text-primary">{{ $vehicle->exterior_color }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Interior Color</p>
                                        <p class="title text-primary">{{ $vehicle->interior_color }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Make</p>
                                        <p class="title text-primary">{{ isset($vehicle->make) ? $vehicle->make->name : '-' }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Model</p>
                                        <p class="title text-primary">{{ $vehicle->model_id }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Trim</p>
                                        <p class="title text-primary">{{ $vehicle->trim }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3 col-6">
                                        <p class="head mb-1">Year</p>
                                        <p class="title text-primary">{{ $vehicle->year }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d627.1937268859081!2d-114.08504708112466!3d51.03877794729636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1700433195619!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <h4>{{ $vehicle->address }}</h4>
                        </div>
                    </div>
                </div>
            </div>
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

    <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            {{-- <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ban and Un Ban User</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body mt-3" style="text-align: center;">
                {!! $shareButton !!}
                <div class="container">
                    <hr>
                    <input  style="width: 80%;" type="text" class="p-2" value="{{ route('detail',$vehicle->slug) }}" id="myInput" disabled>
                    <button style="height: 43px; margin-bottom: 4px;" class="btn btn-primary btn-sm"  onclick="myFunction()" onmouseout="outFunc()"><i class="fa fa-clipboard"></i></button>
                 </div>

            </div>
            {{-- <div class="modal-footer">
              <button class="btn btn-success" type="button" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-primary update_user" type="button">Save changes</button>
            </div> --}}
          </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('.car-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>
    <script>
        var user_id = "{{ Auth::id() }}";
        $(document).ready(function() {
            $('.update-favourite').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var vehicle_id = $(this).data('vehicleid');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('favourite.store') }}',
                    data: {
                        vehicle_id: vehicle_id,
                        user_id: user_id
                    },
                    beforeSend : function(response){
                    $('.loader').show();
                    },
                    success:function(response){
                        if(response.action == 'type'){
                            $('.loader').hide();
                            toastr.error(response.error);
                        }
                        else if(response.action == 'add'){
                            $('.loader').hide();
                            $('a[data-vehicleid='+vehicle_id+']').html(`<i style="font-size: 13px; margin-left: -5px; color: red; margin-bottom: 7px" class="fa fa-bookmark"></i>`);
                            toastr.success(response.message);

                        } else if (response.action == 'remove') {
                            $('.loader').hide();
                            $('a[data-vehicleid=' + vehicle_id + ']').html(
                                `<i style="font-size: 13px; margin-left: -5px; color: red; margin-bottom: 7px" class="fa fa-bookmark-o"></i>`);
                            toastr.success(response.message);
                        }
                    }
                });
            });
        });
    </script>
    <script>
        function myFunction() {
            toastr.success('Text copied');
          var copyText = document.getElementById("myInput");
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          navigator.clipboard.writeText(copyText.value);

          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copied: " + copyText.value;
        }
        </script>
@endpush
