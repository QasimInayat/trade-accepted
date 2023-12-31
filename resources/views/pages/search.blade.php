
@extends('layouts.scaffold')
@push('title')
Search
@endpush
@section('content')


    <main>
        <div class="content pe-2">
            <div class="container-fluid">

                <div class="row mb-4">
                    <div class="col-md-10 col-8">
                        <h2 class="section-heading mb-0">Results for "<span class="text-primary text-italic fw-normal">{{ request('title') }}</span>"</h2>
                    </div>
                    <div class="col-md-2 col-4">
                        {{-- <p class="view-all mb-0 text-end">View All</p> --}}
                    </div>
                </div>

                <div class="row mb-5">
                    @forelse($searchVehicles as $vehicle)
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                               <a href="{{ route('detail',$vehicle->slug) }}">
                                <div class="card-img position-relative">
                                    <img style="height: 200px;" src="{{ asset('upload/vehicle/'.mainImage($vehicle->id)) }}" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">{{ $vehicle->title }}</h5>
                                        <div>
                                            <span>
                                                <img src="{{asset('assets/imgs/fi_share-2.svg')}}" alt="">
                                            </span>
                                             @php $countFavourite = 0 @endphp
                                                    @if (Auth::check())
                                                        @php
                                                            $countFavourite = App\Models\Favourite::countFavourite($vehicle['id']);
                                                        @endphp
                                                    @endif
                                                    @if ($countFavourite > 0)
                                            <span class="ms-1">

                                                <i style="font-size: 10px;" class="fa fa-bookmark"></i>
                                                                                                {{-- <img src="{{asset('assets/imgs/fi_bookmark.svg')}}" alt=""> --}}
                                            </span>
                                                @else
                                                @endif
                                        </div>
                                    </div>
                                </div>
                               </a>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">${{ $vehicle->price }}</h4>
                                    <p class="mb-0">{{ $vehicle->country_id }} . {{ $vehicle->city_id }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    @empty
                    <h4><b>DATA NOT ADDED</b></h4>
                    @endforelse
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
