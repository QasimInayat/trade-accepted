<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card mt-4 pb-5">
            <div style="justify-content: center; text-align: center; margin-top: 20px;">
                <a href="{{ route('detail', $vehicle->slug) }}">
                    <img style="margin-top: 10px; height: 146px; width: 237px;"
                        src="{{ asset('upload/vehicle/' . mainImage($vehicle->id)) }}" class="rounded"
                        alt="">
                </a>
                <a href="{{ route('detail', $vehicle->slug) }}">
                    <p class="mt-2"><b>{{ $vehicle->title }}</b></p>
                </a>
            </div>
            <div style="text-align: center;" class="row">
                <div class="col-md-6 mb-3 col-6">
                    <div style="">
                        <small class="text-primary mb-1">Make</small> <br>
                        <b><small>{{ isset($vehicle->make) ? $vehicle->make->name : '-' }}</small></b>
                    </div>

                </div>
                <div class="col-md-6 mb-3 col-6">
                    <div style="">
                        <small class="text-primary mb-1">Model</small> <br>
                        <b><small>{{ $vehicle->model_id }}</small></b>
                    </div>

                </div>

                <div class="col-md-6 mb-3 col-6">
                    <div style="">
                        <small class="text-primary mb-1">Transmission</small> <br>
                        <b><small>{{ $vehicle->transmission }}</small></b>
                    </div>

                </div>

                <div class="col-md-6 mb-3 col-6">
                    <div style="">
                        <small class="text-primary mb-1">Year</small> <br>
                        <b><small>{{ $vehicle->year }}</small></b>
                    </div>

                </div>
               
            </div>
        </div>
    </div>

</div>