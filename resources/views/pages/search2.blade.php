@extends('layouts.scaffold')
@push('title')
    Search 2
@endpush
@section('content')
    <main>
        <div class="content pe-2">
            <div class="p-1">

                <div style="background-image: url({{ asset('assets/imgs/bg-image.jpg') }})">

                    <div class="text-center p-4">
                        <h1 class="text-white">Found Cars </h1>
                        <p class="text-white">With thousands of cars, we have just the right one for you</p>
                        <div class="row">
                            <div class="col-md-2"></div>

                         <div class="col-md-8">
                            <form action="">
                                <div class="input-group mb-2">
                                    <select name="" id="" class="vehicel-title form-control">
                                        <option value="">Please Select</option>
                                        @forelse ($vehicles as $item)
                                        <option value="">{{ $item->title }}</option>
                                        @empty
                                        Not Data Added
                                        @endforelse
                                    </select>
                                </div>
                            </form>
                        </div>

                            <div class="col-md-2"></div>
                        </div>
                    </div>
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
                                        <input type="text" name="make[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" name="modal[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" name="year[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" name="transmission[]" class="form-control mt-2">
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
                                        <input type="text" name="make[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" name="modal[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" name="year[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" name="transmission[]" class="form-control mt-2">
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
                                        <input type="text" name="make[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" name="modal[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" name="year[]" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" name="transmission[]" class="form-control mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" id="append_card">

                    </div>
                    <div style="justify-content: center; text-align:center;">
                        <div id="add_card" style="width: 60px; " class="btn btn-primary mt-3">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4 text-center mb-3">
                        <button style="padding-left: 50px;padding-right:50px" class="btn btn-primary">Search</button>
                    </div>
                </div>

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
                    "<input type='text' name='make[]' class='form-control mt-2'>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Modal</b></label>" +
                    "<input type='text' name='modal[]' class='form-control mt-2'>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Year</b></label>" +
                    "<input type='text' name='year[]' class='form-control mt-2'>" +
                    "</div>" +
                    "<div class='col-md-12'>" +
                    "<label class='text-primary mt-3'><b>Transmission</b></label>" +
                    "<input type='text' name='transmission[]' class='form-control mt-2'>" +
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
        })
    </script>
@endpush
