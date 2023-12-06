@extends('layouts.scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@section('content')
    <main>
        <div class="content pe-2">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-8 mx-auto">
                        <div class="chat-area custom-flow p-4">
                            <div class="listing-tabs">
                                <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-active" type="button" role="tab"
                                            aria-controls="pills-active" aria-selected="true">Notification</button>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-active" role="tabpanel"
                                        aria-labelledby="pills-active-tab">
                                        <div style="border: 1px white groove;background-color:white;border-radius:5px;" class="tab-content car-list mb-4 p-3" id="pills-tabContent" >
                                            @forelse ($notifications  as $noti)
                                            <div class="row mt-4">
                                                <div class="col-xl-2 col-lg-5">
                                                    <a href="{{ route('detail',$noti->loggable->slug) }}"><img src="{{ asset('upload/vehicle/'.mainImage($noti->loggable->id)) }}" height="60px" width="100%" alt=""></a>
                                                </div>
                                                <div class="col-xl-8 col-lg-7">
                                                    <h6>
                                                            <a href="{{ route('detail',$noti->loggable->slug) }}"><b>{{ isset($noti->loggable) ? $noti->loggable->title : '' }}</b></a>
                                                    </h6>
                                                    <span style="font-size: 12px">{{ ucwords($noti->event) }} At {{ Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}</span>
                                                </div>
                                                <div class="col-lg-2" style="margin-top: 29px;">
                                                    @if ($noti->is_seen == 0)
                                                    <a href="javascript:;" onClick="notification($(this),{{$noti->id}})""><small class="text-primary">mark as read</small></a>
                                                    @else
                                                    @endif
                                                </div>
                                            </div>
                                            @empty
                                                
                                            @endforelse
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
    </main>






@endsection

