@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
    <main>


        <div class="content pe-2">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-md-10 col-8">
                        <h2 class="section-heading mb-0">{{ $title ?? '' }} Vehicle</h2>
                    </div>
                    <div class="col-md-2 col-4">
                        {{-- <p class="view-all mb-0 text-end">View All</p> --}}
                    </div>
                </div>
                <div class="row mb-5">
                    @forelse($favourites as $favourite)
                    <div class="col-lg-3 col-md-6 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                               <a href="{{ route('detail',$favourite->vehicle->slug) }}">
                                <div class="card-img position-relative">
                                    <img style="height: 200px;" src="{{ asset('upload/vehicle/'.mainImage($favourite->vehicle->id)) }}" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">{{ $favourite->vehicle->title }}</h5>
                                        <div>
                                            <span>
                                                <img src="{{asset('assets/imgs/fi_share-2.svg')}}" alt="">
                                            </span>
                                            {{-- <span class="ms-1">
                                                <img src="{{asset('assets/imgs/fi_bookmark.svg')}}" alt="">
                                                @php $countFavourite = 0 @endphp
                                                @if (Auth::check())
                                                    @php
                                                        $countFavourite = App\Models\Favourite::countFavourite($favourite->vehicle['id']);
                                                    @endphp
                                                @endif
                                                <a  data-vehicleid="{{ $favourite->vehicle->id }}" class="ms-1 update-favourite">
                                                    @if ($countFavourite > 0)
                                                    <i style="font-size: 11px;" class="fa fa-bookmark"></i>
                                                    @else
                                                    <i style="font-size: 11px;" class="fa fa-bookmark-o"></i>
                                                        @endif
                                                </a>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                               </a>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">${{ $favourite->vehicle->price }}</h4>
                                    <p class="mb-0">{{ $favourite->vehicle->address }} . {{ $favourite->vehicle->country_id }} {{ $favourite->vehicle->city_id }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    @empty
                    <h4><b>DATA NOT ADDED</b></h4>
                    @endforelse
                </div>

                {{-- <div class="row mb-4">
                    <div class="col-md-10 col-8">
                        <h2 class="section-heading mb-0">Other Listing</h2>
                    </div>
                    <div class="col-md-2 col-4">
                        <p class="view-all mb-0 text-end">View All</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="javascipt:;">
                            <div class="multi-card">
                                <div class="card-img position-relative">
                                    <img src="{{asset('assets/imgs/car-1.png')}}" class="w-100" alt="">
                                    <div class="card-meta d-flex justify-content-between">
                                        <h5 class="mb-0 text-white">2006 Porsche 911</h5>
                                        <div>
                                            <span>
                                                <img src="{{asset('assets/imgs/fi_share-2.svg')}}" alt="">
                                            </span>
                                            <span class="ms-1">
                                                <img src="{{asset('assets/imgs/fi_bookmark.svg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">$48,995</h4>
                                    <p class="mb-0">68K miles . Craig</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div> --}}
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
                    if(response.action == 'add'){
                        $('.loader').hide();
                        $('a[data-vehicleid='+vehicle_id+']').html(`<i style="font-size: 11px;" class="fa fa-bookmark"></i>`);
                        toastr.success(response.message);
                    } else if (response.action == 'remove') {
                        $('.loader').hide();
                        $('a[data-vehicleid=' + vehicle_id + ']').html(
                            `<i style="font-size: 11px;" class="fa fa-bookmark-o"></i>`);
                        toastr.success(response.message);
                    }
                }
            });
        });
    });
</script>
@endpush
