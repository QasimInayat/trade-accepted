
@extends('layouts.scaffold')
@push('title')
Search
@endpush
@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');

* {
  box-sizing: border-box;
  &::before, &::after {
    box-sizing: border-box;
  }
}

body {
  font-family: 'Hind', sans-serif;
  background: $bg;
  color: $gray;
  display: flex;
}



.accordion {
    width: 23%;
    .accordion-item {
    border-bottom: 1px solid $lightgray;
    button[aria-expanded='true'] {
      border-bottom: 1px solid $blue;
    }
  }
  button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    color: $text;
    font-size: 1.15rem;
    border: none;
    background: none;
    outline: none;
    &:hover, &:focus {
      cursor: pointer;
      color: $blue;
      &::after {
        cursor: pointer;
        color: $blue;
        border: 1px solid $blue;
      }
    }
    .icon {
      display: inline-block;
      position: absolute;
      top: 5px;
      right: 7px;
      width: 22px;
      height: 20px;
      border: 1px solid;
      border-radius: 22px;
      &::before {
        display: block;
        position: absolute;
        content: '';
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
      }
      &::after {
        display: block;
        position: absolute;
        content: '';
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
      }
    }
  }
  button[aria-expanded='true'] {
    color: $blue;
    .icon {
      &::after {
        width: 0;
      }
    }
    + .accordion-content {
      opacity: 1;
      max-height: 12em;
    }
  }
  .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
    p {
      font-size: 1rem;
      font-weight: 300;
      margin: 2em 0;
    }
  }
  .accordion-title{
    font-size: 15px;
    font-family: bold;
  }
  #size{
    font-size: 5px;
  }
}
</style>
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
                         <p class="view-all mb-0 text-end">View All</p>
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

    <div class="container" style="padding-top:10%; padding-left:5%;">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-danger text-light">
                    <div class="card-header">
                        <span >Search Results By:</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title p-3 ">Search by Keyword</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="demo" >
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-search p-1"></i></span>
                  </div>
                </div>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title p-3">City</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title p-3">Province</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Make</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3">Price Range</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <form>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="From">
                      <input type="text" class="form-control" placeholder="To">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Go</span>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3">Year</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <form>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="From">
                      <input type="text" class="form-control" placeholder="To">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Go</span>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3">Mileage (KM)</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <form>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="From">
                      <input type="text" class="form-control" placeholder="To">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Go</span>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Color</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Egine Type</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Egine Capacity (CC)</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Assambly</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Body Type</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Number of Doors</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Seating Capacity</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Modal Catagory</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Seller Type</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Picture Availability</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">Video Availability</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3">AD Type</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content p-3">
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-secondary">112</span><br>
                <a href="#">more choices...</a>
            </div>
          </div>
        </div>
      </div>
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
@endpush
