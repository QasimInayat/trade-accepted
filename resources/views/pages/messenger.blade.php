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
                            <div class="col-lg-8">
                                <div class="chat-area">
                                    <!-- chatlist -->
                                    <div class="chatlist">
                                        <div class="modal-dialog-scrollable">
                                            <div class="modal-content">

                                                <div class="modal-body mt-2">
                                                    <!-- chat-list -->
                                                    <div class="chat-lists">
                                                        <div class="">
                                                            @forelse ($threads as $thread)
                                                            <a href="javascript:;" onclick="routetoChat($(this),{{$thread->id}})" style="padding: 5px;" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    @if (!empty($thread->to->image))
                                                                    <img src="{{asset('upload/user/'. $thread->to->image)}}" alt="" style="margin-top: -18px; height: 47px; width: 53px;" class="rounded-circle">
                                                                @else
                                                                     <img src="{{asset('assets/imgs/placeholder1.png')}}" alt="" style="margin-left: -5px; margin-top: -18px; height: 57px; width: 60px;" class="rounded-circle">
                                                                @endif
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3 style="font-size: 16px; margin-top: 7px;">{{ ucwords($thread->to->full_name) }}</h3>
                                                                    <p style="font-size: 14px; margin-top: -7px;">{{ ucwords($thread->vehicle->title) }}</p>
                                                                </div>
                                                            </a>
                                                            @empty

                                                            @endforelse



                                                        </div>

                                                    </div>
                                                    <!-- chat-list -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- chatlist -->



                                    <!-- chatbox -->
                                    <div class="chatbox">
                                        <div class="modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="msg-head d-lg-none d-block">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="d-flex align-items-center">
                                                                <span class="chat-icon"><img class="img-fluid" src="{{asset('assets/imgs/arroleftt.svg')}}" alt="image title"></span>
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="{{asset('assets/imgs/seller.png')}}" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Mehedi Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="moreoption">
                                                                <li class="navbar nav-item dropdown">
                                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                        <li>
                                                                            <hr class="dropdown-divider">
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="msg-body" id="messagesss">
                                                        <ul class="p-0">
                                                            <li class="repaly d-flex gap-3 justify-content-end">
                                                                <!-- <p class="default"> -->
                                                                    <div class="car-offer">
                                                                        <h2>2006 Porsche 911</h2>
                                                                        <h4>$48,995</h4>

                                                                        <div class="d-xl-flex gap-3">
                                                                            <button class="btn btn-primary px-4 mt-3" data-bs-toggle="modal" data-bs-target="#deposit">Deposit</button>
                                                                            <button class="btn btn-light text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#negoriate">Negotiate</button>
                                                                        </div>
                                                                    </div>
                                                                <!-- </p> -->
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:06 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:16 am</span>
                                                            </li>
                                                            <li class="repaly">

                                                                <p>yes!</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:20 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:26 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">junt now</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">junt now</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}" />
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}" />
                                                                <span class="time">junt now</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="send-box">
                                                    <form action="">
                                                        <button class="btn btn-light bg-transparent border-0">
                                                            <img src="{{asset('assets/imgs/fi_plus-circle.svg')}}" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0">
                                                            <img src="{{asset('assets/imgs/fi_camera.svg')}}" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0">
                                                            <img src="{{asset('assets/imgs/fi_image.svg')}}" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0">
                                                            <img src="{{asset('assets/imgs/fi_mic.svg')}}" alt="">
                                                        </button>
                                                        <input type="text" class="form-control" aria-label="message…">

                                                        <button type="button" class="text-primary btn "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- chatbox -->


                            </div>
                            <div class="col-lg-4 pe-lg-0 mt-lg-0 mt-4 mb-lg-0 mb-4">
                                <div class="custom-flow chat-area w-100 p-4 m-0">
                                    <div class="message-for">
                                        <img src="{{asset('assets/imgs/car-2.png')}}" alt="">

                                        <div class="car-details mt-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4>2006 Porsche 911</h4>
                                            </div>
                                            <div class="price mt-3">
                                                <h5 class="mb-0">$48,995</h5>
                                                <p class="mb-0">Listed 5 hours ago . Aurora, CO</p>
                                            </div>

                                            <div class="car-meta mt-3">
                                                <h4>Details</h4>
                                                <div class="meta-desc">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Mileage</p>
                                                            <p class="title text-primary">Driven 77,189 miles</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Transmission</p>
                                                            <p class="title text-primary">Manual</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Exterior Color</p>
                                                            <p class="title text-primary">Red</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Interior Color</p>
                                                            <p class="title text-primary">Black</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Make</p>
                                                            <p class="title text-primary">Volkswagen</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Model</p>
                                                            <p class="title text-primary">911</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Trim</p>
                                                            <p class="title text-primary">Information</p>
                                                        </div>
                                                        <div class="col-md-6 mb-2">
                                                            <p class="head mb-1">Year</p>
                                                            <p class="title text-primary">2006</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="map mt-3 border">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d627.1937268859081!2d-114.08504708112466!3d51.03877794729636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1700433195619!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                <!-- <h4>Aurora, CO</h4> -->
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


    <div class="modal fade" id="deposit" tabindex="-1" aria-labelledby="depositLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4 position-relative">
                <div class="text-end border-0">
                    <!-- <h1 class="modal-title fs-5" id="depositLabel">Modal title</h1> -->
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deposit-modal">
                        <form action="">
                            <h4 class="text-center">Make a Deposite <br> Secure this Vahicle Now</h4>

                            <div class="d-flex gap-3 flex-md-row flex-column align-items-center justify-content-center mt-4 custom-radio mb-4">
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="5%" id="d-1">
                                    <label for="d-1">5%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="10%" id="d-2">
                                    <label for="d-2">10%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="15%" id="d-3">
                                    <label for="d-3">15%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="20%" id="d-4">
                                    <label for="d-4">20%</label>
                                </div>
                            </div>
                            <button id="deposit-submit" class="btn btn-primary mx-auto d-block" disabled>Deposit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="negoriate" tabindex="-1" aria-labelledby="negoriate Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4 position-relative">
                <div class="text-end border-0">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deposit-modal">
                        <form action="">
                            <h4 class="text-center">Negotiate</h4>

                            <div class="d-flex gap-3 flex-column align-items-center justify-content-center mt-4 custom-radio mb-4">
                                <div class="position-relative mb-2 radio">
                                    <input type="radio" name="negotitate" value="Offer 5% Less than Asking" id="n-1">
                                    <label for="n-1">Offer 5% Less than Asking</label>
                                </div>
                                <div class="position-relative mb-2 radio">
                                    <input type="radio" name="negotitate" value="Offer 10% Less than Asking" id="n-2">
                                    <label for="n-2">Offer 10% Less than Asking</label>
                                </div>
                                <div class="position-relative mb-2">
                                    <input type="text" class="form-control text-center" placeholder="Custom" name="deposit" id="n-custom">
                                </div>
                            </div>
                            <button id="negotiate-submit" class="btn btn-primary mx-auto d-block" disabled>Send Offer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

    <script>
        function routetoChat(elm,id){
            $.ajax({
                url: 'messenger/chat/'+id,
                type: 'get',
                data : {},
                success : function(res){
                    $('#messagesss').html(res.data);

                },
                error : function(res){
                    
                }
            })
        }
    </script>
@endpush
