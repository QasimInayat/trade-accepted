@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@push('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind:300,400&display=swap">
    <style>
        * {
            box-sizing: border-box;

            &::before,
            &::after {
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

                &:hover,
                &:focus {
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

                +.accordion-content {
                    opacity: 1;
                    max-height: 36em;
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

            .accordion-title {
                font-size: 15px;

            }

            #size {
                font-size: 5px;
            }
        }
    </style>
@endpush
@section('content')
    <main style="width: 100%;">
        <div class="content pe-2">
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-md-10 col-8">
                        <h2 class="section-heading mb-0">Results for "{{ $vehicle->title }}"<span
                                class="text-primary text-italic fw-normal">{{ request('title') }}</span>"</h2>
                    </div>
                    <div class="col-md-2 col-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-light" style="background-color:red;">
                            <div class="card-header">
                                <span>Search Results By:</span>
                                <div style="margin-top: -20px; text-align: right;">
                                    <a href="{{ route('exchange') }}">clear</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion ">
                            <form action="{{ route('exchange') }}" method="GET">
                                <div class="accordion-item">
                                    <button id="accordion-button-2" type="button" aria-expanded="false"><span
                                            class="accordion-title p-3"><b> Vehicle 1</b></span><span class="icon"
                                            aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                                    <div class="accordion-content p-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                            <div class="card mt-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <h4 class="text-primary"><b>Title</b></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Make</b></label>
                                                            <select name="make[]" class="form-control" required>
                                                                <option value="">Please Select</option>
                                                                @forelse ($makes as $making)
                                                                    <option value="{{ $making->id }}"
                                                                        @if ($making->id == $make[0]) selected @else @endif>
                                                                        {{ $making->name }}</option>

                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Model</b></label>
                                                            <input type="text" name="model[]" value="{{ $model[0] }}"
                                                                class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Year</b></label>
                                                            <input type="text" value="{{ $year[0] }}" name="year[]"
                                                                class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                                            <input type="text" value="{{ $transmission[0] }}"
                                                                name="transmission[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12 mt-3 ">
                                                            <div style="float: right;">
                                                                <button class="input-group-text" type="submit"
                                                                    style="background:red; color:white;"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" type="button" aria-expanded="false"><span
                                            class="accordion-title p-3"><b> Vehicle 2</b></span><span class="icon"
                                            aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                                    <div class="accordion-content p-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                            <div class="card mt-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <h4 class="text-primary"><b>Title</b></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Make</b></label>
                                                            <select name="make[]" class="form-control" required>
                                                                <option value="">Please Select</option>
                                                                @forelse ($makes as $making)
                                                                    <option value="{{ $making->id }}"
                                                                        @if ($making->id == $make[1]) selected @else @endif>
                                                                        {{ $making->name }}</option>

                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Model</b></label>
                                                            <input type="text" name="model[]"
                                                                value="{{ $model[1] }}" class="form-control mt-2"
                                                                required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Year</b></label>
                                                            <input type="text" value="{{ $year[1] }}"
                                                                name="year[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                                            <input type="text" value="{{ $transmission[1] }}"
                                                                name="transmission[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12 mt-3 ">
                                                            <div style="float: right;">
                                                                <button class="input-group-text" type="submit"
                                                                    style="background:red; color:white;"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" type="button" aria-expanded="false"><span
                                            class="accordion-title p-3"><b> Vehicle 3</b></span><span class="icon"
                                            aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                                    <div class="accordion-content p-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                            <div class="card mt-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <h4 class="text-primary"><b>Title</b></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Make</b></label>
                                                            <select name="make[]" class="form-control" required>
                                                                <option value="">Please Select</option>
                                                                @forelse ($makes as $making)
                                                                    <option value="{{ $making->id }}"
                                                                        @if ($making->id == $make[2]) selected @else @endif>
                                                                        {{ $making->name }}</option>

                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Model</b></label>
                                                            <input type="text" name="model[]"
                                                                value="{{ $model[2] }}" class="form-control mt-2"
                                                                required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Year</b></label>
                                                            <input type="text" value="{{ $year[2] }}"
                                                                name="year[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                                            <input type="text" value="{{ $transmission[2] }}"
                                                                name="transmission[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12 mt-3 ">
                                                            <div style="float: right;">
                                                                <button class="input-group-text" type="submit"
                                                                    style="background:red; color:white;"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" type="button" aria-expanded="false"><span
                                            class="accordion-title p-3"><b> Vehicle 4</b></span><span class="icon"
                                            aria-hidden="true"><i class="fas fa-angle-right"></i></span></button>
                                    <div class="accordion-content p-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                            <div class="card mt-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                                <h4 class="text-primary"><b>Title</b></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Make</b></label>
                                                            <select name="make[]" class="form-control" required>
                                                                <option value="">Please Select</option>
                                                                @forelse ($makes as $making)
                                                                    <option value="{{ $making->id }}"
                                                                        @if ($making->id == $make[0]) selected @else @endif>
                                                                        {{ $making->name }}</option>

                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Model</b></label>
                                                            <input type="text" name="model[]"
                                                                value="{{ $model[0] }}" class="form-control mt-2"
                                                                required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Year</b></label>
                                                            <input type="text" value="{{ $year[0] }}"
                                                                name="year[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                                            <input type="text" value="{{ $transmission[0] }}"
                                                                name="transmission[]" class="form-control mt-2" required>
                                                        </div>
                                                        <div class="col-md-12 mt-3 ">
                                                            <div style="float: right;">
                                                                <button class="input-group-text" type="submit"
                                                                    style="background:red; color:white;"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-9">
                        @forelse($query as $vehicle)
                            <div style="border:groove 1px lightgrey;background-color:rgb(245, 242, 242)"
                                class="card mt-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="{{ route('detail', $vehicle->slug) }}"><img class="w-100"
                                                    style="height: 150px;"
                                                    src="{{ asset('upload/vehicle/' . mainImage($vehicle->id)) }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('detail', $vehicle->slug) }}">
                                                <h4 class="text-primary" style="font-size:18px;margin-top:5px">
                                                    {{ $vehicle->title }}</h4>
                                            </a>
                                            <span style="font-size: 13px;">{{ $vehicle->country_id }} .
                                                {{ $vehicle->city_id }}</span><br> <br>
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

                                            <span style="font-size: 11px;">Created at
                                                {{ Carbon\Carbon::parse($vehicle->created_at)->diffForHumans() }}</span>
                                        </div>
                                        <div class="col-md-3">
                                            <span
                                                style="font-size:19px;margin-left:60px"><b>${{ number_format($vehicle->price) }}</b></span>
                                            @auth
                                                <span>
                                                    @php $countFavourite = 0 @endphp
                                                    @if (Auth::check())
                                                        @php
                                                            $countFavourite = App\Models\Favourite::countFavourite($vehicle['id']);
                                                        @endphp
                                                    @endif
                                                    <a style="cursor: pointer;" data-vehicleid="{{ $vehicle->id }}"
                                                        class="ms-1 update-favourite">
                                                        @if ($countFavourite > 0)
                                                            <i style="font-size: 13px;  color: red; margin-bottom: 7px;"
                                                                class="fa fa-bookmark"></i>
                                                        @else
                                                            <i style="font-size: 13px;  color: red; margin-bottom: 7px"
                                                                class="fa fa-bookmark-o"></i>
                                                        @endif
                                                    </a>
                                                    {{-- <img src="{{asset('assets/imgs/fi_bookmark-red.svg')}}" alt=""> --}}
                                                </span>
                                            @endauth
                                            <form action="{{ route('thread.store') }}" method="POST">
                                                @csrf

                                                <button type="post"
                                                    style="font-size:10px;margin-left:45px;margin-top:10px"
                                                    class="btn btn-primary"> <i class=""></i> Contact.</button>
                                            </form>
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
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"
                        aria-label="Close"></button>
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
                    beforeSend: function(response) {
                        $('.loader').show();
                    },
                    success: function(response) {
                        if (response.action == 'type') {
                            $('.loader').hide();
                            toastr.error(response.error);
                        } else if (response.action == 'add') {
                            $('.loader').hide();
                            $('a[data-vehicleid=' + vehicle_id + ']').html(
                                `<i style="font-size: 13px;  color: red; margin-bottom: 7px" class="fa fa-bookmark"></i>`
                            );
                            toastr.success(response.message);

                        } else if (response.action == 'remove') {
                            $('.loader').hide();
                            $('a[data-vehicleid=' + vehicle_id + ']').html(
                                `<i style="font-size: 13px;  color: red; margin-bottom: 7px" class="fa fa-bookmark-o"></i>`
                            );
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
