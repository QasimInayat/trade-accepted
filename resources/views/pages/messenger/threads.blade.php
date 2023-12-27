@foreach($threads as $index=>$thread)
<a href="javascript:;" onClick="threadMessages('{{$thread->id}}')" class="d-flex align-items-center p-3 @if(request('thread') == $thread->id) active-chat @endif">
    <div class="flex-shrink-0">
        @if($thread->to_id == auth()->user()->id )
            <img class="img-fluid" src="{{userAvatar(isset($thread->from) ? $thread->from->image : null) }}" alt="user img" style="height:45px; width:45px">
        @else
            <img class="img-fluid" src="{{userAvatar(isset($thread->to) ? $thread->to->image : null) }}" alt="user img" style="height:45px; width:45px">
        @endif
        <!--<span class="active"></span>-->
    </div>
    <div class="flex-grow-1 ms-3">
        <h3>{{isset($thread->vehicle) ? Str::of($thread->vehicle->title)->limit(20) : null}}</h3>
        @if($thread->to_id == auth()->user()->id )
            <p>{{isset($thread->from) ? $thread->from->first_name.' '.$thread->from->last_name : null}}</p>
        @else
            <p>{{isset($thread->to) ? $thread->to->first_name.' '.$thread->to->last_name : null}}</p>
        @endif
        <small>{{ lastMessage($thread->id) }}</small>
    </div>
</a>
@endforeach