@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
<main>
    <div class="content pe-2">
        <div class="container-fluid">

            <section class="message-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 mt-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="payment-form mt-5">
                                        <h3 class="text-center">Payment Method</h3>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Card Number</label>
                                                <input type="text" name="card_number" class="form-control" required id="card_number" value="{{ auth()->user()->card_number }}" placeholder="4242-4242-4242-4242">
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Card Name</label>
                                                <input type="text" name="card_name" class="form-control" required value="{{ auth()->user()->card_name }}" id="card-name" placeholder="Full name as displayed on card">
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Expiry</label>
                                                <input type="text" name="expiry" class="form-control" required value="{{ auth()->user()->expiry }}" id="exprationDate" placeholder="MM / YYYY">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">CVC</label>
                                                <input type="text" name="cvc" class="form-control" required id="card_cvc" value="{{ auth()->user()->cvc }}" placeholder="card-cvc">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Country</label>
                                                <select name="country_id" required class="form-control custom-control" id="country" onchange="print_state('state',this.selectedIndex);">
                                                </select>
                                            </div>
                                            <div class="mb-2" style="float: right;">
                                                <button type="submit" class="btn-sm btn btn-primary">Save</button>
                                            </div>
                                            <div></div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    {{-- <h3 class="mt-5 text-center">Vehicle Detail</h3> --}}
                                    <div id="vehicle-details" class="message-for">
                                            <div style="text-align: center;">
                                                <a href="{{ route('detail',$vehicle->slug) }}">
                                                    <img style="height: 160px; width: 400px;" src="{{ asset('upload/vehicle/'.mainImage($vehicle->id)) }}" alt="">
                                                    <h4  class="mt-2 ">{{ $vehicle->title }}</h4>
                                                </a>
                                            </div>
                                                <div style="text-align: center;" class="d-flex  justify-content-between">
                                                </div>
                                                <div class="price mt-3">
                                                    <h5 class="mb-0">${{ 0.95 * $vehicle->price  }}</h5>
                                                    <p class="mb-0 text-primary">Listed {{ Carbon\Carbon::parse($vehicle->created_at)->diffForHumans() }} . {{ $vehicle->country_id }} {{ $vehicle->city_id }}</p>
                                                </div>
                                            </div>
                                            
                                        <div class="car-details ">
                            
                                            <div class="car-meta">
                                                <h4 class="mt-4">Details</h4>
                                                <div class="meta-desc">
                                                    <div class="row ">
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Mileage</p>
                                                            <p class="title text-primary">{{ $vehicle->mileage }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Transmission</p>
                                                            <p class="title text-primary">{{ $vehicle->transmission }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Exterior Color</p>
                                                            <p class="title text-primary">{{ $vehicle->exterior_color }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Interior Color</p>
                                                            <p class="title text-primary">{{ $vehicle->interior_color }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Make</p>
                                                            <p class="title text-primary">{{ isset($vehicle->make) ? $vehicle->make->name : '-' }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Model</p>
                                                            <p class="title text-primary">{{ $vehicle->model_id }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Trim</p>
                                                            <p class="title text-primary">{{ $vehicle->trim }}</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Year</p>
                                                            <p class="title text-primary">{{ $vehicle->year }}</p>
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
                </div>
            </section>
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
            print_country("country");
        $("#card_number").mask("9999-9999-9999-9999");
        $("#card_cvc").mask("999");
        $("#exprationDate").mask("99/9999");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

@endpush
