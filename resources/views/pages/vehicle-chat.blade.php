        <div id="vehicle-details" class="message-for">
            <img style="height: 160px; width: 400px;" src="{{ asset('upload/vehicle/'.mainImage($chat->vehicle->id)) }}" alt="">

            <div class="car-details mt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <h4>{{ $chat->vehicle->title }}</h4>
                </div>
                <div class="price mt-3">
                    <h5 class="mb-0">${{ number_format($chat->vehicle->price) }}</h5>
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
 