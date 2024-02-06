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
                                            <option value="civic">Civic</option>
                                            <option value="corola">Corola</option>
                                            <option value="supra">Supra</option>
                                            <option value="BMW">BMW</option>
                                        </select>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary" type="submit"
                                                style="border-radius: 0px 10px 10px 0px; padding:14px; "><i
                                                    class="fa fa-search"></i></button>
                                        </div>
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
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" class="form-control mt-2">
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
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" class="form-control mt-2">
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
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
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
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" class="form-control mt-2">
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
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Modal</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Year</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="text-primary mt-3"><b>Transmission</b></label>
                                        <input type="text" class="form-control mt-2">
                                    </div>
                                </div>
                            </div>
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
