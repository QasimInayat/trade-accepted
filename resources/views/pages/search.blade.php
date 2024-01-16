@extends('layouts.scaffold')
@push('title')
Search
@endpush
@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400&display=swap">
<style>
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
   border-radius: 22px;
   &::before {
   display: block;
   position: absolute;
   content: '';
   background: currentColor;
   }
   &::after {
   display: block;
   position: absolute;
   content: '';
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
         </div>
         --}}
         <div class="row">
            <div class="col-md-3">
                <div class="card text-light" style="background-color:red;">
                  <div class="card-header">
                     <span >Search Results By:</span>
                </div>
               </div>
               <div class="accordion ">
                  <div class="accordion-item">
                     <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title p-3 "><b>Search by Keyword</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                         <div class="input-group mb-3">
                           <form action="{{ route('search') }}" method="GET">
                               <div class="input-group mb-2">
                                   <input autocomplete="off" name="title" value="{{ request('title') }}" placeholder="Search Vehcile" class="vehicel-title form-control" id=""  type="search">
                                   <div class="input-group-prepend">
                                       <button class="btn btn-primary" type="submit" style="background:red;"><i class="fa fa-search text-light p-1"></i></button>
                                   </div>
                               </div>
                             </form>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title p-3"><b> City</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Lahore  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title p-3"><b> Province</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Punjab  </small> <span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Make</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3"><b> Price Range</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <form>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="From">
                              <input type="text" class="form-control" placeholder="To">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" style="background:red; color:white;">Go</span>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3"><b> Year</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <form>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="From">
                              <input type="text" class="form-control" placeholder="To">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" style="background:red; color:white;">Go</span>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title p-3"><b> Mileage (KM) </b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <form>
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="From">
                              <input type="text" class="form-control" placeholder="To">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" style="background:red; color:white;">Go</span>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Color</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Egine Type </b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Egine Capacity (CC)</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Assambly</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Body Type</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Number of Doors</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Seating Capacity</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Modal Catagory</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Seller Type</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Picture Availability</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> Video Availability</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title p-3"><b> AD Type</b></span><span class="icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                     <div class="accordion-content p-3">
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <input type="checkbox" name="" id="size">&nbsp; <small> Honda   </small><span  style="padding-left: 50%"></span><span class="badge bg-light text-dark border">112</span><br>
                        <a href="javascript:;" style="color:blue;"><small> more choices... </small></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
               {{-- <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)" class="card">
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
               </div> --}}
               @forelse($searchVehicles as $vehicle)
               <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)" class="card mt-2">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <a href="{{ route('detail',$vehicle->slug) }}"><img class="w-100" style="height: 150px;" src="{{ asset('upload/vehicle/'.mainImage($vehicle->id)) }}" alt=""></a>
                        </div>
                        <div class="col-md-6">
                           <a href="{{ route('detail',$vehicle->slug) }}">
                              <h4 class="text-primary" style="font-size:18px;margin-left:15px;margin-top:5px">{{ $vehicle->title }}</h4>
                           </a>
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
               <h4 style="margin-top:10px"><b>DATA NOT ADDED</b></h4>
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
</script>
@endpush
