@extends('layouts.scaffold')
@push('title')
Detail
@endpush
@section('content')

    <main>
        <div class="content pe-2">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-12">
                        <a href="javascript:;" class="back"><i class="fa fa-chevron-left text-primary me-2"></i>
                            Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="car-slider">
                            @forelse ($galleries as $gallery)
                            <div>
                                <img height="400px"class="w-100" src="{{ asset('upload/vehicle/'.$gallery->image) }}" alt="">
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="car-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <h2>{{ $vehicle->title }}</h2>
                                <div>
                                    <span>
                                        <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" alt="">
                                    </span>
                                    <span class="ms-1">
                                        <img src="{{asset('assets/imgs/fi_bookmark-red.svg')}}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="price d-flex align-items-end gap-4 mt-3">
                                <h4 class="mb-0">${{ $vehicle->price }}</h4>
                                <p class="mb-0">{{ $vehicle->created_at }} . {{ $vehicle->city_id }}</p>
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
                                            <h5>{{ $vehicle->user->first_name }} {{ $vehicle->user->last_name }}</h5>
                                            <p class="mb-0 fw-bold">Manual</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('messanger') }}"><button class="btn btn-primary px-4">Contact</button></a>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Mileage</p>
                                        <p class="title text-primary">{{ $vehicle->mileage }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Transmission</p>
                                        <p class="title text-primary">{{ $vehicle->transmission }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Exterior Color</p>
                                        <p class="title text-primary">{{ $vehicle->exterior_color }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Interior Color</p>
                                        <p class="title text-primary">{{ $vehicle->interior_color }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Make</p>
                                        <p class="title text-primary">{{ isset($vehicle->make) ? $vehicle->make->name : '-' }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Model</p>
                                        <p class="title text-primary">{{ $vehicle->model_id }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                        <p class="head mb-1">Trim</p>
                                        <p class="title text-primary">{{ $vehicle->trim }}</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
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
@endpush
