@extends('layouts.scaffold')
@push('title')
Search 2
@endpush
@section('content')

<main>

    <div class="content pe-2">

<div style="background-image: url({{  asset('assets/imgs/bg-image.jpg')  }})">

    <div class="container p-4">
        <div class="text-center">
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
                            <button class="btn btn-primary" type="submit" style="border-radius: 0px 10px 10px 0px; padding:14px; "><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                  </form>
            </div>
            <div class="col-md-2"></div>
           </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-body">
                    <img style="height:200px;margin-left:30px" src="{{  asset('assets/imgs/car-9.png')  }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 233px" class="card mt-4 text-center p-5">
                <div class="card-body">
                    <h4 class="text-primary mt-3"><b>Make</b></h4>
                    <span class="mt-3"><b>Toyota</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 233px" class="card mt-4 text-center p-5">
                <div class="card-body">
                    <h4 class="text-primary mt-3"><b>Modal</b></h4>
                    <span class="mt-3"><b>Corola</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div style="height: 233px" class="card mt-4 text-center p-5">
                <div class="card-body">
                    <h4 class="text-primary mt-3"><b>Year</b></h4>
                    <span class="mt-3"><b>2020</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div style="height: 233px" class="card mt-4 text-center p-5">
                <div class="card-body">
                    <h4 class="text-primary mt-3"><b>Transmission</b></h4>
                    <span class="mt-3"><b>Manual</b></span>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4 text-center mb-3">
            <button style="padding-left: 50px;padding-right:50px" class="btn btn-primary">Search</button>
        </div>
    </div>

</div>
</main>


@endsection
