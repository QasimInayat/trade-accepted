@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
    <main>
        <div class="content pe-2">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-8 mx-auto">
                <div class="chat-area custom-flow p-4">
                    <div class="listing-tabs">
                        <ul class="nav nav-pills mb-3 border-bottom">
                            <li class="nav-item">
                                <button class="nav-link">Notifications</button>
                            </li>
                        </ul>
                        <div>
                            <div>
                                <div style="border: 1px white groove;background-color:white;border-radius:5px;" class="car-list mb-4 p-3">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-5">
                                            <img src="{{asset('assets/imgs/car-9.png')}}" height="60px" alt="">
                                        </div>
                                        <div class="col-xl-8 col-lg-7">
                                            <h6>
                                                    <b>Vehicle Created</b>
                                            </h6>
                                            <span style="font-size: 12px">Vehicle Created At 11-09-2023</span>
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
    </main>






@endsection

