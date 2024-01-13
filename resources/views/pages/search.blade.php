
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
{{--
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
                                             {{-- </span>
                                                @else
                                                @endif
                                        </div>
                                    </div>
                                </div>
                               </a>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h4 class="mb-0">${{ number_format($vehicle->price) }}</h4>
                                    <p class="mb-0">{{ $vehicle->country_id }} . {{ $vehicle->city_id }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    @empty
                    <h4><b>DATA NOT ADDED</b></h4>
                    @endforelse


                </div>  --}}
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-8">
                        <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)" class="card">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-1">
                                    <small style="font-size: 13px">Sort By:</small>
                                </div>
                                <div class="col-md-5">
                                    <select name="" id="" class="form-control p-2">
                                        <option value="Select Vehicle">Select Vehicle</option>
                                        <option value="">Toyota</option>
                                        <option value="">Honda</option>
                                        <option value="">Suzuki</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5" ></div>
                    <div class="col-md-8">
                    @forelse($searchVehicles as $vehicle)
                        <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)" class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ route('detail',$vehicle->slug) }}"><img class="w-100" style="height: 150px;" src="{{ asset('upload/vehicle/'.mainImage($vehicle->id)) }}" alt=""></a>
                                    </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('detail',$vehicle->slug) }}"><h4 class="text-primary" style="font-size:18px;margin-left:15px;margin-top:5px">{{ $vehicle->title }}</h4></a>
                                            <span style="font-size: 13px;margin-left:15px">{{ $vehicle->country_id }} . {{ $vehicle->city_id }}</span><br>
                                            <br>
                                            <span  style="font-size: 14px;margin-left:15px">{{ $vehicle->year }} | {{ $vehicle->mileage }} | {{ $vehicle->fuel }} | {{ $vehicle->trim }}</span>
                                            <br>
                                            <span style="font-size: 11px;margin-left:15px">Updated about 2 hours ago</span>
                                        </div>
                                        <div class="col-md-3">
                                            <span style="font-size:19px;margin-left:60px"><b>${{ number_format($vehicle->price) }}</b></span>
                                            @auth
                                                <span>
                                                    @php $countFavourite = 0 @endphp
                                                            @if (Auth::check())
                                                                @php
                                                                    $countFavourite = App\Models\Favourite::countFavourite($vehicle['id']);
                                                                @endphp
                                                            @endif
                                                            <a style="cursor: pointer;"  data-vehicleid="{{ $vehicle->id }}" class="ms-1 update-favourite">
                                                                @if ($countFavourite > 0)
                                                                <i style="font-size: 13px;  color: red; margin-bottom: 7px;" class="fa fa-bookmark"></i>
                                                                @else
                                                                <i style="font-size: 13px;  color: red; margin-bottom: 7px" class="fa fa-bookmark-o"></i>
                                                                    @endif
                                                            </a>
                                                    {{-- <img src="{{asset('assets/imgs/fi_bookmark-red.svg')}}" alt=""> --}}
                                                </span>
                                            @endauth
                                            <button style="font-size:10px;margin-left:45px;margin-top:10px" class="btn btn-primary"> <i class="fa fa-phone"></i>   Show Phone No.</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                        @empty
                    <h4><b>DATA NOT ADDED</b></h4>
                    @endforelse
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
                        $('a[data-vehicleid='+vehicle_id+']').html(`<i style="font-size: 13px;  color: red; margin-bottom: 7px" class="fa fa-bookmark"></i>`);
                        toastr.success(response.message);

                    } else if (response.action == 'remove') {
                        $('.loader').hide();
                        $('a[data-vehicleid=' + vehicle_id + ']').html(
                            `<i style="font-size: 13px;  color: red; margin-bottom: 7px" class="fa fa-bookmark-o"></i>`);
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
