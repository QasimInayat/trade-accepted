        <div id="messagesss" class="modal-content">
            <div class="msg-head d-lg-none d-block">
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex align-items-center">
                            <span class="chat-icon"><a href="javascript:;" onclick="routetoMessenger($(this))"><img class="img-fluid" src="{{ asset('assets/imgs/arroleftt.svg') }}" alt="image title"></a></span>
                            <div class="flex-shrink-0">
                                @if (!empty($thread->to->image))
                                <img src="{{asset('upload/user/'. $thread->to->image)}}" class="rounded-circle" style="height: 33px; width: 40px;">
                            @else
                                 <img src="{{asset('assets/imgs/placeholder1.png')}}"  style="height: 33px; width: 40px;">
                            @endif
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3>{{ ucwords($thread->to->full_name) }}</h3>
                                <p>{{ ucwords($thread->vehicle->title) }}</p>
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
                <div class="msg-body">
                    <ul class="p-0">
                        {{-- <li class="repaly d-flex gap-3 justify-content-end">
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
                        </li> --}}

                        @forelse ($replies as $reply)
                            <li class="repaly">
                                <p>{{ $reply->message }}</p>
                                @if (!empty($reply->from->image))
                                <img src="{{asset('upload/user/'. $reply->from->image)}}" style="height: 40px;">
                            @else
                                 <img src="{{asset('assets/imgs/placeholder1.png')}}" >
                            @endif
                                {{-- <img src="{{asset('assets/imgs/user.png')}}" /> --}}
                                <span class="time">{{ Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                            </li>
                        @empty

                        @endforelse
                            {{-- @forelse ($senders as $sender)
                            <li class="sender">
                                @if (!empty($sender->to->image))
                                <img src="{{asset('upload/user/'. $sender->to->image)}}" style="height: 40px;">
                            @else
                                 <img src="{{asset('assets/imgs/placeholder1.png')}}" >
                            @endif
                                <p> {{ $sender->message }} </p>
                                <span class="time">{{ Carbon\Carbon::parse($reply->created_at)->diffForHumans() }}</span>
                            </li>
                            @empty
                                
                            @endforelse --}}
                        {{-- <li>
                            <div class="divider">
                                <h6>Today</h6>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>


            <div class="send-box">
                <form id="createMessage">
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
                    <input type="hidden" name="to_id" value="{{ $thread->to_id }}">
                    <input type="hidden" name="thread_id" value="{{ $thread->id }}">
                    <input required name="message" autocomplete="off" type="text" class="messageinput form-control" aria-label="message…">

                    <button type="submit" class="text-primary btn "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>

            </div>
        </div>

