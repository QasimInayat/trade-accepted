@extends('layouts.scaffold')
@push('title')
Messanger
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
                                                        <div class="chat-list">
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                    <span class="active"></span>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Mehedi Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Ryhan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Malek Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Sadik Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Bulu </h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Maria SK</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Dipa Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Jhon Hasan</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Tumpa Moni</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h3>Payel Akter</h3>
                                                                    <p>front end developer</p>
                                                                </div>
                                                            </a>



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


                                                <div class="modal-body p-4">
                                                    <div class="msg-body">
                                                        <ul class="p-0">
                                                            <li class="repaly d-flex gap-3 justify-content-end">
                                                                <!-- <p class="default"> -->
                                                                    <div class="car-offer">
                                                                        <h2>2006 Porsche 911</h2>
                                                                        <h4>$48,995</h4>

                                                                        <div class="d-lg-flex gap-3">
                                                                            <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#deposit">Deposit</button>
                                                                            <button class="btn btn-light text-uppercase" data-bs-toggle="modal" data-bs-target="#negoriate">Negotiate</button>
                                                                        </div>
                                                                    </div>
                                                                <!-- </p> -->
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:06 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:16 am</span>
                                                            </li>
                                                            <li class="repaly">

                                                                <p>yes!</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:20 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:26 am</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">junt now</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">junt now</span>
                                                            </li>
                                                            <li class="sender">
                                                                <img src="{{asset('assets/imgs/seller.png')}}">
                                                                <p> Hey, Are you there? </p>
                                                                <span class="time">10:32 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>How are you?</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:35 am</span>
                                                            </li>
                                                            <li>
                                                                <div class="divider">
                                                                    <h6>Today</h6>
                                                                </div>
                                                            </li>

                                                            <li class="repaly">
                                                                <p> yes, tell me</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">10:36 am</span>
                                                            </li>
                                                            <li class="repaly">
                                                                <p>yes... on it</p>
                                                                <img src="{{asset('assets/imgs/user.png')}}">
                                                                <span class="time">junt now</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="send-box">
                                                    <form action="">
                                                        <input type="text" class="form-control" aria-label="message…" placeholder="Write message…">

                                                        <button type="button" class="text-primary btn "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- chatbox -->


                            </div>
                            <div class="col-lg-4">

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
                    <!-- <h1 class="modal-title fs-5" id="negoriate Label">Modal title</h1> -->
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
                                    <!-- <label for="d-4">20%</label> -->
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
        $(document).ready(function () {
            $(".chat-list a").click(function () {
                $(".chatbox").addClass('showbox');
                return false;
            });

            $(".chat-icon").click(function () {
                $(".chatbox").removeClass('showbox');
            });

            $('input.deposit-radio').on('change', function () {
                // Enable or disable the button based on the radio button state
                if ($('#d-1').is(':checked') || $('#d-2').is(':checked') || $('#d-3').is(':checked') || $('#d-3').is(':checked')) {
                    $('#deposit-submit').prop('disabled', false);
                } else {
                    $('#deposit-submit').prop('disabled', true);
                }
            });

            // function checkButtonStatus() {
            //     console.log($('#n-custom').val());
            //     // Check if input field has a value or if any radio button is checked
            //     if ($('#n-custom').val() !== '' || $('input[name="negotitate"]:checked').length > 0) {
            //         $('#negotiate-submit').prop('disabled', false);

            //     } else {
            //         $('#negotiate-submit').prop('disabled', true);
            //     }
            // }

            // // Check button status on input field change
            // $('#n-custom').on('input', function () {
            //     checkButtonStatus();
            // });


            // $('input[name="negotitate"]').on('change', function () {
            //     $('#n-custom').val('');
            //     // If any radio button is checked, make the input optional
            //     if ($('input[name="negotitate"]:checked').length > 0) {
            //         $('#n-custom').prop('required', false);

            //     } else {
            //         // If no radio button is checked, make the input required
            //         $('#n-custom').prop('required', true);
            //     }

            //     checkButtonStatus();
            // });

            function checkButtonStatus() {
                // Check if input field has a value or if any radio button is checked
                const customValue = $('#n-custom').val();
                const radioChecked = $('input[name="negotitate"]:checked').length > 0;

                if(customValue !== ''){
                    $('#n-custom').addClass('has-value');
                    $('input[name="negotitate"]').prop('checked', false);
                } else {
                    $('#n-custom').removeClass('has-value');
                }

                $('#negotiate-submit').prop('disabled', customValue === '' && !radioChecked);
            }

            // Check button status on input field change
            $('#n-custom').on('input', checkButtonStatus);

            $('input[name="negotitate"]').on('change', function () {
                $('#n-custom').val('');

                // If any radio button is checked, make the input optional
                $('#n-custom').prop('required', !$('input[name="negotitate"]:checked').length > 0);

                checkButtonStatus();
});
        });
    </script>
@endpush
