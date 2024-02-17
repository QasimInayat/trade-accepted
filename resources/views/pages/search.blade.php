@extends('layouts.scaffold')
@push('title')
Search
@endpush
@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400&display=swap">
<style>

   body {
   font-family: 'Hind', sans-serif;
   background: $bg;
   color: $gray;
   display: flex;
   }
   .accordion-title{
   font-size: 15px;
   }
   .accordion-item{
    border: none;
   }

   #size{
   font-size: 5px;
   }

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
.wrapper1 {
  width: 100%;
  border-radius: 10px;
  padding: 5px 20px 20px;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);

}
.price-input {
  width: 100%;
  display: flex;
  margin: 30px 0 35px;
}
.price-input .field {
  display: flex;
  width: 80%;
  height: 40px;
  align-items: center;
}
.field input {
  width: 100%;
  height: 100%;
  font-size: 19px;
  margin-left: 12px;
  text-align: center;
  border-radius : 3px;
  border: 1px solid #999;
  -moz-appearance: textfield;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.price-input .separator {
  width: 80px;
  display: flex;
  font-size: 19px;
  align-items: center;
  justify-content: center;
}
.slider {
  height: 5px;
  position: relative;
  background: #ddd;
  border-radius: 5px;
}
.slider .progress {
  height: 100%;
  left: 25%;
  right: 25%;
  position: absolute;
  border-radius: 5px;
  background: red;
}
.range-input {
  position: relative;
}
.range-input input {
  position: absolute;
  width: 100%;
  height: 5px;
  top: -5px;
  background: none;
  pointer-events: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
input[type="range"]::-webkit-slider-thumb {
  height: 17px;
  width: 17px;
  border-radius: 50%;
  background: red;
  pointer-events: auto;
  -webkit-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}
input[type="range"]::-moz-range-thumb {
  height: 17px;
  width: 17px;
  border: none;
  border-radius: 50%;
  background: red;
  pointer-events: auto;
  -moz-appearance: none;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}
</style>
@endpush
@section('content')
<main style="width: 100%;">
   <div class="content pe-2">
      <div class="container-fluid">
         <div class="row mb-4">
            <div class="col-md-10 col-8">
               <h2 class="section-heading mb-0">Results for "<span class="text-primary text-italic fw-normal">{{ request('title') }}</span>"</h2>
            </div>
            <div class="col-md-2 col-4">
            </div>
         </div>
         <div class="row">
            <div class="col-md-3">
                <div class="card text-light" style="background-color:red;">
                  <div class="card-header">
                     <span >Search Results By:</span>
                     <div style="margin-top: -20px; text-align: right;">
                         <a href="{{ route('search') }}">clear</a>
                     </div>
                </div>
               </div>

               <div class="accordion wrapper1 pb-5">
                  <form action="{{ route('search') }}" method="GET">
                    <div class="d-flex">
                        <div class="">
                          <div class="price-input">
                            <div class="field">
                              <span>Min</span>
                              <input type="number" name="min" class="input-min" value="{{ request('min') ?? 20000 }}">
                            </div>
                            <div class="separator"></div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" name="max" class="input-max" value="{{ request('max') ?? 75000 }}">
                            </div>
                          </div>
                          <div class="slider">
                            <div class="progress"></div>
                          </div>
                          <div class="range-input">
                            <input type="range" name="min" class="range-min" min="" max="100000" value="{{ request('min') ?? 20000 }}" step="100">
                            <input type="range" name="max"  class="range-max" min="" max="100000" value="{{ request('max') ?? 75000 }}" step="100">
                          </div>
                        </div>
                      </div>
                    <div class="accordion-item mt-4">
                        <h5 class="mt-1" id="accordion-button-1" aria-expanded="true"><span class="accordion-title p-1 "><b>Search by Keyword</b></span></h5>
                        <div class="accordion-content p-2">
                            <div class="input-group">
                                  <div class="input-group ">
                                      <input autocomplete="off" name="title" value="{{ request('title') }}" placeholder="Search Vehcile" class="vehicel-title form-control" id=""  type="search">
                                  </div>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-2" aria-expanded="true"><span class="accordion-title p-1"><b> Country Location</b></span></h5>
                        <div class="accordion-content p-2">
                               <div class="input-group">
                                <select name="country_id" class="form-control custom-control" value="{{ request('country_id') }}" id="country" onchange="print_state('state',this.selectedIndex);">
                                </select>
                               </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-2" aria-expanded="true"><span class="accordion-title p-1"><b> City Location</b></span></h5>
                        <div class="accordion-content p-2">
                               <div class="input-group">
                                  <input type="text" class="form-control" value="{{ request('city_id') }}" name="city_id" placeholder="Search City">
                               </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-4" aria-expanded="true"><span class="accordion-title p-1"><b> Modal</b></span></h5>
                        <div class="accordion-content p-2">
                               <div class="input-group">
                                  <input autocomplete="off" name="model_id" value="{{ request('model_id') }}" type="search" class="form-control" placeholder="Modal">
                               </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-4" aria-expanded="true"><span class="accordion-title p-1"><b>Make</b></span></h5>
                        <div class="accordion-content p-2">
                               <div class="input-group">
                                <select name="make_id" class="form-control custom-control" value="" >
                                <option value="">Please Select</option>
                                @foreach($makes as $make)
                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                @endforeach
                            </select>
                               </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Trim</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input autocomplete="off" name="trim" value="{{ request('trim') }}" type="search" type="text" class="form-control" placeholder="Trim">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Transmission</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input autocomplete="off" name="transmission" value="{{ request('transmission') }}" type="search" type="text" class="form-control" placeholder="Transmission">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Fuel</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input autocomplete="off" name="fuel" value="{{ request('fuel') }}" type="search" type="text" class="form-control" placeholder="Fuel">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Exterior Color</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input autocomplete="off" name="exterior_color" value="{{ request('exterior_color') }}" type="search" type="text" class="form-control" placeholder="Exterior color">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Interior Color</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input autocomplete="off" name="interior_color" value="{{ request('interior_color') }}" type="search" type="text" class="form-control" placeholder="Interior color">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b> Year</b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input type="number" class="form-control" name="from" placeholder="From">
                                 <input type="number" class="form-control" name="to"  placeholder="To">
                              </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h5 class="mt-1" id="accordion-button-5" aria-expanded="true"><span class="accordion-title p-1"><b>Mileage </b></span></h5>
                        <div class="accordion-content p-2">
                              <div class="input-group">
                                 <input type="text" class="form-control" value="{{ request('mileage') }}" name="mileage" placeholder="Mileage">
                              </div>
                        </div>
                         <div style="float: right;">
                            <button class="input-group-text mt-2" type="submit" style="background:red; color:white;"><i class="fa fa-search p-1"></i></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-9">
               @forelse($data as $vehicle)
               <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)" class="card mt-2">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <a href="{{ route('detail',$vehicle->slug) }}"><img class="w-100" style="height: 150px;" src="{{ asset('upload/vehicle/'.mainImage($vehicle->id)) }}" alt=""></a>
                        </div>
                        <div class="col-md-6">
                           <a href="{{ route('detail',$vehicle->slug) }}">
                              <h4 class="text-primary" style="font-size:18px;margin-top:5px">{{ $vehicle->title }}</h4>
                           </a>
                           <span style="font-size: 13px;">{{ $vehicle->country_id }} . {{ $vehicle->city_id }}</span><br> <br>
                           {{-- <br> --}}
                           <div class="row">
                            <div class="col-md-3 col-6">
                                <span style="font-size: 14px">
                                    <small class="text-primary">Make</small><br>
                                    {{ $vehicle->make->name }}
                                    </span>

                            </div>
                            <div class="col-md-3 col-6">
                                <span style="font-size: 14px">
                                    <small class="text-primary">Model</small><br>
                                    {{ $vehicle->model_id }}
                                    </span>
                            </div>
                            <div class="col-md-3 col-6">
                                <span style="font-size: 14px">
                                    <small class="text-primary">Year</small><br>
                                    {{ $vehicle->year }}
                                </span>
                            </div>
                            <div class="col-md-3 col-6">
                                <span style="font-size: 14px">
                                    <small class="text-primary">Transmission</small><br>
                                    {{ $vehicle->transmission }}
                                    </span>

                            </div>
                           <br>
                        </div>

                           <span style="font-size: 11px;">Created at {{ Carbon\Carbon::parse($vehicle->created_at)->diffForHumans() }}</span>
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
                           <form action="{{ route('thread.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                            <input type="hidden" name="to_id" value="{{ $vehicle->user_id }}">
                            <button type="post" style="font-size:10px;margin-left:45px;margin-top:10px" class="btn btn-primary"> <i class=""></i>  Contact.</button>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>
               @empty
               <h4 style="margin-top:10px"><b>No record found.</b></h4>
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
<script src="{{ asset('assets/js/payment-related.js') }}"></script>
<script>
        print_country("country");
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
   const items = document.querySelectorAll(".accordion button");

   function toggleAccordion() {
   const itemToggle = this.getAttribute('aria-expanded');

   for (i = 0; i < items.length; i++) {
   items[i].setAttribute('aria-expanded', 'false');
   }

   if (itemToggle == 'false') {
   this.setAttribute('aria-expanded', 'true');
   }
   }

   items.forEach(item => item.addEventListener('click', toggleAccordion));
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
   const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

</script>
@endpush
