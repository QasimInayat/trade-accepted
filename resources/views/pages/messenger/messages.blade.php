<ul class="p-0">
    <input type="hidden" id="messageThreadId" value="{{isset($messages[0]->thread_id) ? $messages[0]->thread_id : null}}">

    @foreach($messages as $index=>$message)
        @if($message->is_offer == 1 && auth()->user()->id == $message->from_id)
            <li class="repaly d-flex gap-3 justify-content-end">
                <!-- <p class="default"> -->
                    <div class="car-offer">
                        @php $vehicle = vehicleById($message->thread_id); @endphp
                        <h5 class="text-primary">{{ $vehicle->title }}</h5>
                        <h4>${{number_format($vehicle->price)}}</h4>

                        <div class="d-xl-flex gap-3">
                            <button class="btn btn-primary px-4 mt-3" data-bs-toggle="modal" data-bs-target="#deposit">Deposit</button>
                            <button class="btn btn-light text-uppercase mt-3" data-bs-toggle="modal" data-bs-target="#negoriate">Negotiate</button>
                        </div>
                    </div>
                <!-- </p> -->
                <img src="{{userAvatar(isset($message->from) ? $message->from->image : null) }}" />
            </li>

        @endif
        @if( $message->is_vehicle_id  && auth()->user()->id == $message->from_id)
        <li class="repaly d-flex gap-3 justify-content-end">
            <!-- <p class="default"> -->
                <div style="width: 317px;"  class="car-offer">
                    @php $vehicle = vehicleById($message->thread_id); @endphp
                    <a href="{{ route('detail',$message->isVehicle->slug) }}">
                        <img style="width: 90px; height: 80px;" src="{{ asset('upload/vehicle/'.mainImage($message->isVehicle->id)) }}" alt="">
                    </a>
                    <a href="{{ route('detail',$message->isVehicle->slug) }}">
                        <h5 class="text-primary">{{ $message->isVehicle->title }}</h5>
                    </a>
                    <h4>${{number_format($message->isVehicle->price)}}</h4>
                </div>
            <!-- </p> -->
            <img src="{{userAvatar(isset($message->from) ? $message->from->image : null) }}" />
        </li>

        @endif
        @if($message->from_id == auth()->user()->id)
           <li class="repaly">
            {{-- <p>{{ $message->id }}</p> --}}
                <p>{{$message->message}}</p>
                <img src="{{userAvatar(isset($message->from) ? $message->from->image : null) }}" />
                <span class="time">{{date('h:m A',strtotime($message->created_at))}}</span>
            </li>
        @elseif($message->form_id != auth()->user()->id)
            <li class="sender">
                <img src="{{userAvatar(isset($message->from) ? $message->from->image : null) }}" />
                <p> {{$message->message}} </p>
                <span class="time">{{date('h:m A',strtotime($message->created_at))}}</span>
            </li>

        @endif

    @endforeach
</ul>
