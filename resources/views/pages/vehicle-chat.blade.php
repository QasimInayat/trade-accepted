        <div id="vehicle-details" class="message-for">
            <a href="{{ route('detail',$chat->vehicle->slug) }}">
                <img style="height: 160px; width: 400px;" src="{{ asset('upload/vehicle/'.mainImage($chat->vehicle->id)) }}" alt="">
            </a>

            <div class="car-details mt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h4>{{ $chat->vehicle->title }}</h4>
                </div>
                <div class="price mt-3">
                    <h5 class="mb-0">${{ $chat->vehicle->price }}</h5>
                    <p class="mb-0">Listed {{ Carbon\Carbon::parse($chat->vehicle->created_at)->diffForHumans() }} . {{ $chat->vehicle->country_id }} {{ $chat->vehicle->city_id }}</p>
                </div>

                <div class="car-meta mt-3">
                    <h4>Details</h4>
                    <div class="meta-desc">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Mileage</p>
                                <p class="title text-primary">{{ $chat->vehicle->mileage }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Transmission</p>
                                <p class="title text-primary">{{ $chat->vehicle->transmission }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Exterior Color</p>
                                <p class="title text-primary">{{ $chat->vehicle->exterior_color }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Interior Color</p>
                                <p class="title text-primary">{{ $chat->vehicle->interior_color }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Make</p>
                                <p class="title text-primary">{{ isset($chat->vehicle->make) ? $chat->vehicle->make->name : '-' }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Model</p>
                                <p class="title text-primary">{{ $chat->vehicle->model_id }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Trim</p>
                                <p class="title text-primary">{{ $chat->vehicle->trim }}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <p class="head mb-1">Year</p>
                                <p class="title text-primary">{{ $chat->vehicle->year }}</p>
                            </div>
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
                                <h4 class="text-center">Make a Deposite <br> Secure this Vehicle Now</h4>
        
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
                                <button id="deposit-submit" class="btn btn-primary mx-auto d-block" disabled><a href="{{ route('payment',$thread->vehicle->slug ) }}" id="PrintPer">Deposit now</a></button>
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
                            <form id="negotiateStore">
                                <h4 class="text-center">Negotiate</h4>
        
                                <div class="d-flex gap-3 flex-column align-items-center justify-content-center mt-4 custom-radio mb-4">
                                    <div class="position-relative mb-2 radio">
                                        <input type="radio" name="message" class="values" value="Offer 5% Less than Asking" >
                                        <label >Offer 5% Less than Asking</label>
                                    </div>
                                    <div class="position-relative mb-2 radio">
                                        <input type="radio" name="message" class="values" value="Offer 10% Less than Asking" id="n-2">
                                        <label for="n-2">Offer 10% Less than Asking</label>
                                    </div>
                                    <div class="position-relative mb-2">
                                        <input type="text" class="form-control text-center values" placeholder="Custom" name="message" id="n-custom">
                                    </div>
                                </div>
                                <input type="hidden" name="thread_id"  value="{{ $thread->id }}">
                                <input type="hidden" name="to_id" value="{{ $thread->to_id }}">
                                <button type="submit" id="negotiate-submit" class="btn btn-primary mx-auto d-block" disabled>Send Offer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
            const radioChecked = $('.values:checked').length > 0;

            if(customValue !== ''){
                $('#n-custom').addClass('has-value');
                $('.values').prop('checked', false);
            } else {
                $('#n-custom').removeClass('has-value');
            }

            $('#negotiate-submit').prop('disabled', customValue === '' && !radioChecked);
        }

        // Check button status on input field change
        $('#n-custom').on('input', checkButtonStatus);

        $('.values').on('change', function () {
            $('#n-custom').val('');

            // If any radio button is checked, make the input optional
            $('#n-custom').prop('required', !$('.values:checked').length > 0);

            checkButtonStatus();
});
    });
</script>

<script>
    $(document).ready(function(e){
        $('#d-1').click(function(){
            $('#PrintPer').html('Deposit Now 5%');
        })
        $('#d-2').click(function(){
            $('#PrintPer').html('Deposit Now 10%');
        })
        $('#d-3').click(function(){
            $('#PrintPer').html('Deposit Now 15%');
        })
        $('#d-4').click(function(){
            $('#PrintPer').html('Deposit Now 20%');
        })
    });
</script>
        