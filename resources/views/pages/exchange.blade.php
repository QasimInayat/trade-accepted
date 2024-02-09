@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@section('content')
    <main>
        <div class="content pe-2">
            <div class="p-1">

                <form action="{{ route('exchange') }}" method="GET">
                    <div style="background-image: url({{ asset('assets/imgs/bg-image.jpg') }})">

                        <div class="text-center p-4">
                            <h1 class="text-white">Exchange Your Cars </h1>
                            {{-- <p class="text-white">With thousands of cars, we have just the right one for you</p> --}}
                            <div class="row">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <div class="mb-2">

                                        <select name="vehicle_id" id="vehicle-select" required class="form-control">
                                            <option value="">Please Select</option>
                                            @forelse ($vehicles as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @empty
                                                Not Data Added
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div id="exchange_vehicle">



                    </div>

                    <div class="row p-4">
                        <div class="col-md-4">
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
                                                @forelse ($makes as $make)
                                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                @empty
                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Model</b></label>
                                            <input type="text" name="model[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Year</b></label>
                                            <input type="text" name="year[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                            <input type="text" name="transmission[]" class="form-control mt-2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                                                @forelse ($makes as $make)
                                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                @empty
                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Model</b></label>
                                            <input type="text" name="model[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Year</b></label>
                                            <input type="text" name="year[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                            <input type="text" name="transmission[]" class="form-control mt-2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
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
                                                @forelse ($makes as $make)
                                                    <option value="{{ $make->id }}">{{ $make->name }}</option>
                                                @empty
                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Model</b></label>
                                            <input type="text" name="model[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Year</b></label>
                                            <input type="text" name="year[]" class="form-control mt-2" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="text-primary mt-3"><b>Transmission</b></label>
                                            <input type="text" name="transmission[]" class="form-control mt-2" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row p-4" style="margin-top: -30px;" id="append_card">

                    </div>
                    <div style="justify-content: center; text-align:center;">
                        <div id="add_card" style="width: 60px; " class="btn btn-primary mt-3">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4 text-center mb-3">
                        <button style="padding-left: 50px;padding-right:50px" type="submit"
                            class="btn btn-primary">Search</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#add_card').click(function() {
                var append = "<div class='col-md-4'>" +
                    "<div class='card mt-4'>" +
                    "<div class='card-body'>" +
                    "<div class='row'>" +
                    "<div class='col-md-11 col-11'>" +
                    "<div class='text-center'>" +
                    "<h4 class='text-primary'><b>Title</b></h4>" +
                    "</div>" +
                    "</div>" +
                    "<div class='col-md-1 col-1 text-danger' style='cursor: pointer;' id='remove_card'><i class='fa fa-times'></i>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Make</b></label>" +
                    "<input type='text' name='make[]' class='form-control mt-2' required>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Model</b></label>" +
                    "<input type='text' name='model[]' class='form-control mt-2' required>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Year</b></label>" +
                    "<input type='text' name='year[]' class='form-control mt-2' required>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Transmission</b></label>" +
                    "<input type='text' name='transmission[]' class='form-control mt-2' required>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>";
                $('#append_card').append(append);
            });
            $(document).on('click', '#remove_card', function() {
                $(this).parent().parent().parent().parent().remove();
            })
        });
        $(document).ready(function() {
            $('#vehicle-select').change(function() {
                var selectedId = $(this).val();
                if (selectedId) {
                    routetoVehicle(selectedId);
                }
            });
        });

        function routetoVehicle(id) {
            $.ajax({
                url: 'exchange-vehicle/' + id,
                type: 'get',
                data: {},
                success: function(res) {
                    $('#exchange_vehicle').html(res.data);

                },
                error: function(res) {
                    toastr.error('Something went wrong');
                }
            });
        }
    </script>
@endpush
