@extends('layouts.scaffold')
@push('title')
Profile
@endpush
@section('content')
    <main>
        <div class="content pe-2">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="chat-area custom-flow p-4">
                                <div class="profile-detail">
                                    <div class="edit text-end">
                                        <button class="btn btn-light bg-transparent btn-sm" data-toggle="modal" data-target="#myModal">
                                            <img src="{{asset('assets/imgs/fi_edit-3.svg')}}" class="me-1" alt="" >
                                            Edit
                                        </button>
                                    </div>
                                    <div class="profile text-center mt-3">
                                        <img src="{{asset('assets/imgs/user.png')}}" alt="" class="d-block mx-auto">
                                        <span class="d-block mt-3">Member Since 2018</span>
                                        <h3 class="name text-primary fw-bold mt-3">Steve Davidson</h3>
                                        <p class="mb-1">steve.davidson@example.com</p>
                                        <p class="mb-1">+1 (456) 356 5486</p>
                                        <p class="mb-1">123 Columbus Avenue, 9th Floor <br>New York, NY 10023</p>
                                    </div>

                                    <div class="payment-form mt-5">
                                        <h3 class="text-center">Payment Method</h3>
                                        @if(isset($user))
                                        {!! Form::model($user, ['route' => ['userprofile.update' , $user->id] ,'enctype'=>'multipart/form-data' , 'class' => 'mt-4']) !!}
                                        @else
                                        {!! Form::open(['route' => 'userprofile.store' ,'enctype'=>'multipart/form-data' , 'class' => 'mt-4']) !!}
                                        @endif
                                            <div class="mb-3">
                                                <label for="" class="form-label">Card Number</label>
                                                {!! Form::text('card_number', null, ['class' => 'form-control', 'id' => 'card_number' , 'placeholder' => '4242-4242-4242-4242']) !!}
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">Name</label>
                                                {!! Form::text('full_name', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                            </div>

                                            <div class="mb-3">

                                                <label for="" class="form-label">Expiry</label>
                                                {!! Form::text('expiry', null, ['class' => 'form-control' , 'id' => 'exprationDate' , 'placeholder' => 'MM / YYYY']) !!}
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label">CVC</label>
                                                {!! Form::text('cvc', null, ['class' => 'form-control' , 'id' => 'card_cvc' , 'placeholder' => 'card-cvc']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 mt-lg-0 mt-4">
                            <div class="chat-area custom-flow p-4">
                                <div class="listing-tabs">
                                    <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-active" type="button" role="tab"
                                                aria-controls="pills-active" aria-selected="true">Active
                                                Listings</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-previous-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-previous" type="button" role="tab"
                                                aria-controls="pills-previous" aria-selected="false">Previous
                                                listings</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-active" role="tabpanel"
                                            aria-labelledby="pills-active-tab">
                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-4.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-5.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-6.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-previous" role="tabpanel"
                                            aria-labelledby="pills-previous-tab">
                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-10.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-8.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="car-list mb-4">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5">
                                                        <img src="{{asset('assets/imgs/car-9.png')}}" class="w-100" alt="">
                                                    </div>
                                                    <div class="col-xl-8 col-lg-7 mt-lg-0 mt-3">
                                                        <h5>
                                                            2006 Porsche 911
                                                            <img src="{{asset('assets/imgs/fi_share-2-red.svg')}}" class="ms-2"
                                                                alt="">
                                                        </h5>
                                                        <h4>$48,995</h4>
                                                        <p class="mb-2">68K miles . Craig</p>
                                                        <div class="d-flex gap-4">
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_eye.svg')}}" class="me-2" alt="">
                                                                254 views
                                                            </div>
                                                            <div class="list-meta">
                                                                <img src="{{asset('assets/imgs/fi_bookmark-g.svg')}}" class="me-2"
                                                                    alt="">
                                                                56 bookmarks
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

                        <div class="col-xl-3 col-lg-3 mt-lg-0 mt-4">
                            <div class="chat-area custom-flow p-4">
                                <div class="reviews">
                                    <h5 class="fw-bold">Reviews</h5>

                                    <div class="review-list mt-4">
                                        <div class="review-image d-flex justify-content-between align-items-end">
                                            <img src="{{asset('assets/imgs/user.png')}}" alt="" class="d-block users">
                                            <img src="{{asset('assets/imgs/star.png')}}" alt="">
                                        </div>
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.</p>
                                    </div>

                                    <div class="review-list mt-4">
                                        <div class="review-image d-flex justify-content-between align-items-end">
                                            <img src="{{asset('assets/imgs/seller.png')}}" alt="" class="d-block users">
                                            <img src="{{asset('assets/imgs/star.png')}}" alt="">
                                        </div>
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.</p>
                                    </div>

                                    <div class="review-list mt-4">
                                        <div class="review-image d-flex justify-content-between align-items-end">
                                            <img src="{{asset('assets/imgs/user.png')}}" alt="" class="d-block users">
                                            <img src="{{asset('assets/imgs/star.png')}}" alt="">
                                        </div>
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.</p>
                                    </div>

                                    <div class="review-list mt-4">
                                        <div class="review-image d-flex justify-content-between align-items-end">
                                            <img src="{{asset('assets/imgs/seller.png')}}" alt="" class="d-block users">
                                            <img src="{{asset('assets/imgs/star.png')}}" alt="">
                                        </div>
                                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

    <div class="container">


        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                Modal body..
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

      </div>


@endsection
@push('scripts')    
    <script src="{{ asset('assets/js/payment-relatedss.js') }}"></script>
    <script>
        $(function() {
        $("#card_number").mask("9999-9999-9999-9999");
        $("#card_cvc").mask("999");
        $("#exprationDate").mask("99/9999");
    });
</script>
@endpush
