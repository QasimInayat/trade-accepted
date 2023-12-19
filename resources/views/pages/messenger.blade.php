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
                                <div class="chatlist p-0 me-lg-3">
                                    <div class="modal-dialog-scrollable">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <!-- chat-list -->
                                                <div class="">
                                                    <div class="chat-list">
                                                        <a href="#" class="d-flex align-items-center p-3 active-chat">
                                                            <div class="flex-shrink-0">
                                                                <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                                <span class="active"></span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h3>Mehedi Hasan</h3>
                                                                <p>front end developer</p>
                                                            </div>
                                                        </a>
                                                        @forelse ($threads as $thread)
                                                        <a href="javascript:;" onclick="routetoChat($(this),{{$thread->id}})"  class="d-flex align-items-center p-3 ">
                                                            <div class="flex-shrink-0">
                                                                @if (!empty($thread->to->image))
                                                                <img src="{{asset('upload/user/'. $thread->to->image)}}" alt="" style="height: 47px; width: 53px;" class="rounded-circle">
                                                            @else
                                                                 <img src="{{asset('assets/imgs/placeholder1.png')}}" alt="" style="height: 57px; width: 60px; margin-left: -6px;d-flex align-items-center p-3 active-chat" class="rounded-circle">
                                                            @endif
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h3>{{ ucwords($thread->to->full_name) }}</h3>
                                                                <p>{{ ucwords($thread->vehicle->title) }}</p>
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
                                        <div id="messagesss" class="modal-content">
                                            <div class="msg-head d-lg-none d-block">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="d-flex align-items-center">
                                                            <span class="chat-icon"><img class="img-fluid" src="{{ asset('assets/imgs/arroleftt.svg') }}" alt="image title"></span>
                                                            <div class="flex-shrink-0">
                                                                <img class="img-fluid" src="{{ asset('assets/imgs/seller.png') }}" alt="user img">
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
                                                <div class="msg-body" >
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
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:06 am</span>
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:16 am</span>
                                                        </li>
                                                        <li class="repaly">

                                                            <p>yes!</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:20 am</span>
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:26 am</span>
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:32 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>How are you?</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:35 am</span>
                                                        </li>
                                                        <li>
                                                            <div class="divider">
                                                                <h6>Today</h6>
                                                            </div>
                                                        </li>

                                                        <li class="repaly">
                                                            <p> yes, tell me</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:36 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>yes... on it</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">junt now</span>
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:32 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>How are you?</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:35 am</span>
                                                        </li>
                                                        <li>
                                                            <div class="divider">
                                                                <h6>Today</h6>
                                                            </div>
                                                        </li>

                                                        <li class="repaly">
                                                            <p> yes, tell me</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:36 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>yes... on it</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">junt now</span>
                                                        </li>
                                                        <li class="sender">
                                                            <img src="{{ asset('assets/imgs/seller.png') }}" />
                                                            <p> Hey, Are you there? </p>
                                                            <span class="time">10:32 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>How are you?</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:35 am</span>
                                                        </li>
                                                        <li>
                                                            <div class="divider">
                                                                <h6>Today</h6>
                                                            </div>
                                                        </li>

                                                        <li class="repaly">
                                                            <p> yes, tell me</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">10:36 am</span>
                                                        </li>
                                                        <li class="repaly">
                                                            <p>yes... on it</p>
                                                            <img src="{{ asset('assets/imgs/user.png') }}" />
                                                            <span class="time">junt now</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="send-box">
                                                <form action="">
                                                    <button class="btn btn-light bg-transparent border-0">
                                                        <img src="{{ asset('assets/imgs/fi_plus-circle.svg') }}" alt="">
                                                    </button>
                                                    <button class="btn btn-light bg-transparent border-0">
                                                        <img src="{{ asset('assets/imgs/fi_camera.svg') }}" alt="">
                                                    </button>
                                                    <button class="btn btn-light bg-transparent border-0">
                                                        <img src="{{ asset('assets/imgs/fi_image.svg') }}" alt="">
                                                    </button>
                                                    <button class="btn btn-light bg-transparent border-0">
                                                        <img src="{{ asset('assets/imgs/fi_mic.svg') }}" alt="">
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
                        <div  class="col-lg-4 pe-lg-0 mt-lg-0 mt-4 mb-lg-0 mb-4">
                            <div class="custom-flow chat-area w-100 p-4 m-0">
                                <div id="vehicle-details" class="message-for">
                                    <img src="{{ asset('assets/imgs/car-2.png') }}" alt="">

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


<script>
    function routetoChat(elm,id){

        $.ajax({
            url: 'chat/'+id,
            type: 'get',
            data : {},
            success : function(res){
                $('#messagesss').html(res.data);

            },
            error : function(res){
                toastr.error('Something went wrong');
            }
        });
        $.ajax({
            url: 'vehicle-chat/'+id,
            type: 'get',
            data : {},
            success : function(res){
                $('#vehicle-details').html(res.data);

            },
            error : function(res){
                toastr.error('Something went wrong');
            }
        })
    }
</script>

<script>
           $(document).on('submit' ,'#createMessage', function(e){
           e.preventDefault();
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           let formData = new FormData($('#createMessage')[0]);
           $.ajax({
               type: "POST",
               url: "{{ route('chat.store') }}",
               data: formData,
               contentType: false,
               processData: false,
               beforeSend : function(response){
                    $('.loader').show();
                    $('.loaderShow').hide();
                    },
               success: function (response){
                $('.loader').hide();
                $('.loaderShow').show();
                   },
                   error: function (response){
                    $('.loader').hide();
                   }
               }
               )
               let getMessage = $('.messageinput').val();
           if(getMessage !== ''){
            let newMessage = "<li class='repaly'>"+
                "<p>" + getMessage + "</p>"+
                "@if (!empty($threadd->from->image))"+
                "<img src='{{asset('upload/user/'. $threadd->from->image)}}' style='height: 40px;'>"+
                            "@else"+
                                 "<img src='{{asset('assets/imgs/placeholder1.png')}}'>"+
                            "@endif"+
                            "<div class='loader' >"+
                                "<i class='fa fa-clock-o '></i>"+
          "</div>"+
                "<span class='loaderShow time'>just now</span></li>";
            $('.msg-body .p-0').append(newMessage);
            $('.messageinput').val("");
            }
            });
</script>
<script>
    function routetoMessenger(elm){
        $.ajax({
            url: '{{ route('messenger') }}',
            type: 'get',
            data : {},
            success : function(res){
                $('#mainbody').html(res);

            },
            error : function(res){
                toastr.error('Something went wrong');
            }
        });
    }
</script>
@endpush
