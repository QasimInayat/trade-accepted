<div  class="message-for" >
    <a href="{{ route('detail',$thread->vehicle->slug) }}">
        <img style="height: 160px; width: 400px;" src="{{ asset('upload/vehicle/'.mainImage($thread->vehicle->id)) }}" alt="">
    </a>

    <div class="car-details mt-3">
        <div class="">
            <h4>{{ $thread->vehicle->title }}</h4>
        </div>
        <div class="price mt-3">
            <h5 class="mb-0">${{ number_format($thread->vehicle->price) }}</h5>
            <p class="mb-0">Listed {{ Carbon\Carbon::parse($thread->vehicle->created_at)->diffForHumans() }} . {{ $thread->vehicle->country_id }} {{ $thread->vehicle->city_id }}</p>
        </div>

        <div class="car-meta mt-3">
            <h4>Details</h4>
            <div class="meta-desc">
                <div class="row">
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Mileage</p>
                        <p class="title text-primary">{{ $thread->vehicle->mileage }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Transmission</p>
                        <p class="title text-primary">{{ $thread->vehicle->transmission }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Exterior Color</p>
                        <p class="title text-primary">{{ $thread->vehicle->exterior_color }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Interior Color</p>
                        <p class="title text-primary">{{ $thread->vehicle->interior_color }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Make</p>
                        <p class="title text-primary">{{ isset($thread->vehicle->make) ? $thread->vehicle->make->name : '-' }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Model</p>
                        <p class="title text-primary">{{ $thread->vehicle->model_id }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Trim</p>
                        <p class="title text-primary">{{ $thread->vehicle->trim }}</p>
                    </div>
                    <div class="col-md-6 col-6 mb-2">
                        <p class="head mb-1">Year</p>
                        <p class="title text-primary">{{ $thread->vehicle->year }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>