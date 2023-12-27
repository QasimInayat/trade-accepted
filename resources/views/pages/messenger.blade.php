@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
<style>
 
</style>
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
                                                    <div class="chat-lists">
                                                        <div class="chat-list">
                                                            @include('pages.messenger.threads')
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
                                        <div class="modal-dialog-scrollable" id="messages_container">
                                            <div class="modal-content">
                                                <div class="msg-head d-lg-none d-block">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="d-flex align-items-center">
                                                                <span class="chat-icon"><img class="img-fluid" src="./assets/imgs/arroleftt.svg" alt="image title"></span>
                                                                <div class="flex-shrink-0">
                                                                    <img class="img-fluid" src="./assets/imgs/seller.png" alt="user img">
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
                                                <div class="modal-body p-4" >
                                                    <div class="msg-body" id="threadMessages">
                                                    </div>
                                                </div>
            
            
                                                <div class="send-box" style="display:none">
                                                   <form method="POST" id="form" class="mt-3">
                                                       @csrf
                                                        <button class="btn btn-light bg-transparent border-0 d-none">
                                                            <img src="./assets/imgs/fi_plus-circle.svg" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0 d-none">
                                                            <img src="./assets/imgs/fi_camera.svg" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0 d-none">
                                                            <img src="./assets/imgs/fi_image.svg" alt="">
                                                        </button>
                                                        <button class="btn btn-light bg-transparent border-0 d-none">
                                                            <img src="./assets/imgs/fi_mic.svg" alt="">
                                                        </button>
                                                        <input type="text" class="form-control" aria-label="message…"  name="sendMessage" id="sendMessage">
            
                                                        <button type="submit" class="text-primary btn "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </form>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- chatbox -->
            
            
                            </div>
                            <div class="col-lg-4 pe-lg-0 mt-lg-0 mt-4 mb-lg-0 mb-4 text-center">
                                <div class="custom-flow chat-area w-100 p-4 m-0" id="messengerVehicleDetail">
                                  
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
                        
                            <h4 class="text-center">Make a Deposite <br> Secure this Vahicle Now</h4>

                            <div class="d-flex gap-3 flex-md-row flex-column align-items-center justify-content-center mt-4 custom-radio mb-4">
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="5" id="d-1">
                                    <label for="d-1">5%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="10" id="d-2">
                                    <label for="d-2">10%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="15" id="d-3">
                                    <label for="d-3">15%</label>
                                </div>
                                <div class="position-relative mb-3 radio">
                                    <input class="deposit-radio" type="radio" name="deposit" value="20" id="d-4">
                                    <label for="d-4">20%</label>
                                </div>
                            </div>
                            <button id="deposit-submit" type="button" class="btn btn-primary mx-auto d-block" disabled onClick="sendDeposit($(this))">Deposit now</button>
                        
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
                                    <input type="text" class="form-control text-center" placeholder="Custom" name="customNegotiate" id="n-custom">
                                </div>
                            </div>
                            <button id="negotiate-submit"  type="button" class="btn btn-primary mx-auto d-block" onClick="sendNegotiate($(this))">Send Offer</button>
                        
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
                if ($('#d-1').is(':checked') || $('#d-2').is(':checked') || $('#d-3').is(':checked') || $('#d-3').is(':checked') || $('#d-4').is(':checked')) {
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
        
        
        function vehicleDetail(thread_id){
            $.ajax({
                'type' : 'GET',
                'url'  : '{{route("chat.vehicle")}}',
                'data' : {
                    'thread_id'  : thread_id
                },
                success : function(res){
                    if(res.success == true){
                        $("#messengerVehicleDetail").html(res.vehicleDetail);
                    }
                },
                error   : function(res){
                    
                }
            });
        }
        
        
        
        function messages(thread_id){
            $.ajax({
                'type' : 'GET',
                'url'  : '{{route("chat.messages")}}',
                'data' : {
                    'thread_id'  : thread_id
                },
                success : function(res){
                    if(res.success == true){
                        $("#threadMessages").html(res.messages);
                    }
                },
                error   : function(res){
                    
                }
            });
        }
        
        
        function sendCustomMessage(thread_id,msg,from){
            $.ajax({
                type : "GET",
                url  : "{{route('chat.customMessage')}}",
                data : {
                    'thread_id'  : thread_id,
                    'msg'  : msg,
                    'from'  : from,
                },
                success : function(res){
                    if(res.success == true){
                        messages(thread_id);
                        $("#negoriate").modal('hide');
                        $("[name=customNegotiate]").val('');
                        $("#sendMessage").val('');
                          $('#messages_container').animate({scrollTop:$('#messages_container').prop('scrollHeight')}, 1000);
                       
                    }
                },
                error  : function(res){
                    
                }
            });
        }
        
        function threadMessages(thread_id){
            vehicleDetail(thread_id);
            messages(thread_id);
            $('.send-box').show();
        }
        
        
        function sendNegotiate(elm){
            var thread_id = $("#messageThreadId").val();
            var msg = '';
            var from = "{{auth()->user()->id}}";
            
            var negotitate = $("[name=negotitate]:checked").val();
            var customNegotiate = $("[name=customNegotiate]").val();
            
            if(customNegotiate != ""){
                msg = customNegotiate;
            }
            else{
                msg = negotitate;
            }
            
            sendCustomMessage(thread_id,msg,from);
        }
        
        
        function sendDeposit(elm){
             var thread_id = $("#messageThreadId").val();
             var deposit = $("[name=deposit]:checked").val();
             $.ajax({
                type  : "GET",
                url   : "{{route('chat.sendDeposit')}}",
                data  : {
                  'thread_id'  : thread_id,
                  'deposit'  : deposit,
                },
                success : function(res){
                    if(res.success == true){
                        window.location.href = "{{route('deposit')}}";
                    }
                },
                error   : function(res){
                    
                }
             });
        }
        
        
        $("#form").submit(function(e) {
            e.preventDefault();
            var message = $("#sendMessage").val();
            var threadId = $("#messageThreadId").val();
            var from = "{{ auth()->user()->id }}";
            sendCustomMessage(threadId,message,from);
        });
        
         $(document).ready(function () {
             var thread_id = "{{ request('thread') }}";
             vehicleDetail(thread_id);
             messages(thread_id);
             $('.send-box').show();
         });
         
         
         setInterval(function() {
           var threadId = $("#messageThreadId").val();
            vehicleDetail(threadId);
            messages(threadId);
        }, 2000);

    </script>
@endpush