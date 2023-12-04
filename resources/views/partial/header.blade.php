<header class="py-3 px-2">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo-head d-flex align-items-center gap-3">
                <a href="{{ route('index') }}"><img src="{{asset('assets/imgs/logo.png')}}" alt="" class="d-block"></a>
                <h1 class="mb-0">{{ $heading ?? '' }}</h1>
            </div>
            <div class="vertical-nav d-flex align-items-center">
                <ul class="list-unstyled text-end d-lg-block d-none mb-0">
                   @auth
                   <li class="d-inline-block">
                    <a class="btn btn-primary w-fit" href="{{route('vehicle.create')}}"> Add Listing </a>
                </li>
                @endauth
                    <li class="d-inline-block">
                        {{-- <img style="margin-bottom: -50px;" src="{{asset('assets/imgs/fi_search.svg')}}" alt=""> --}}
                        <div class="custom-search">
                            <div class="cell-wrapper">
                                <input required="" autocomplete="off" name="q" placeholder="Search Vehcile" class="form-control" id="express-form-typeahead"  type="search">
                                <button class="search-btn" type="submit"><span class="icon"></span></button>
                                <div class="close-search" aria-label="Close" id="closeSearch" ></div>
                            </div>
                        </div>
                    </li>
@auth
<li class="d-inline-block">
    <div class="dropdown">
        <button style="background-color: transparent; border: none;" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <a href="javascript:;" class="px-2">
                <img src="{{asset('assets/imgs/fi_bell.svg')}}" alt="">
                <div style="margin-top: -35px; margin-right: -33px;">
                    <span style="height: 14px; width: 18px; font-size: 9px; margin-left: -14px;" class="badge bg-danger">{{ notificationCount() }}</span>
                </div>
            </a>
        </button>
        <ul class="dropdown-menu" style="width: 300px;">
            <li><a class="dropdown-item"><small>Notification</small> <span style="float: right; margin-top: 3px;" class="badge bg-danger">{{ notificationCount() }}</span> </a></li>
            @forelse (notification() as $dd)
            <hr>
            <li class="seen_notification"><a class="dropdown-item"><input type="hidden" id="edit_notification_id" value="{{ $dd->id }}"> <small class="text-success">{{ $dd->loggable->title }}</small> <p>{{ ucwords($dd->event) }}.</p>  <div style="margin-top: -20px; float: right;"><small style="font-size: 12px;" class="text-secondary">{{ Carbon\Carbon::parse($dd->created_at)->diffForHumans() }}</small></div> </a></li>
            @empty
            @endforelse
            <div style="float: right; margin-top: 10px;">
                <a style="font-size: 13px; margin-left: -59px;" href="{{ route('notification') }}">View All</a>
            </div>
        </ul>
    </div>
</li>
@endauth
                    <li style="margin-right: 15px" class="d-inline-block">
                        <a href="{{ route('messenger') }}" class="px-2">
                            <img src="{{asset('assets/imgs/fi_message-square.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a style="font-size: 1px;" href="javascript:;" class="px-2">
                           
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    @guest
                    <a class="btn btn-primary" href="{{ route('login') }}"> Login </a>&nbsp;&nbsp;
                    <a class="btn btn-primary" href="{{ route('register') }}"> Register </a>
                    @endguest
                    @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle auth-dropdown" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            <span class="user-image">
                                @if (!empty(userImage()->image))
                                    <img src="{{asset('upload/user/'. userImage()->image)}}" alt="">
                                @else
                                <img src="{{asset('assets/imgs/placeholder1.png')}}" alt="">
                                @endif
                            </span>
                            <span class="d-md-inline d-none">Welcome back, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('vehicle.index')}}">My Listing</a></li>
                            <li><a class="dropdown-item" href="javscript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout"> <i class="fa fa-sign-out"></i> Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a></li>
                        </ul>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

                $(document).on('click' , '.seen_notification' , function (e){
            e.preventDefault();
            var notification_id = $('#edit_notification_id').val();
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.ajax({
            type: 'PUT',
            url: 'update-notification/'+notification_id,
            dataType: 'json',
            success: function(response){
                if(response.status == 400){
                    $.each(response.errors, function (key, err_values){
                        $('#updateform_errList').append('<li>'+err_values+'</li>');
                    });
                }else if(response.status == 404){
                    toastr.error(response.message);
                }else{
                    toastr.success(response.message);
                }
            }
          });
      });
</script>