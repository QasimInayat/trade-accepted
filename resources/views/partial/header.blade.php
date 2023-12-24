
<header class="py-3 px-2">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo-head d-flex align-items-center gap-3">
                <a href="{{ route('index') }}"><img src="{{asset('assets/imgs/logo.png')}}" alt="" class="d-block"></a>
                <h1 class="mb-0">{{ $heading ?? '' }}</h1>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="menu-btn d-md-none d-block">
                    <span class="burger"><span></span></span>
                </div>
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
                        <div class="search-bar">
                            <div class="custom-search">
                                <div class="cell-wrapper ui-widget">
                                    <form action="{{ route('search') }}" method="GET">
                                        <input autocomplete="off" name="title" value="{{ request('title') }}" placeholder="Search Vehcile" class="" id="express-form-typeahead"  type="search">
                                    </form>
                                    <button class="search-btn" type="submit"><span class="icon"></span></button>
                                    <div class="close-search" aria-label="Close" id="closeSearch" ></div>
                                </div>
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
                    <span style="height: 14px; width: 18px; font-size: 9px; margin-left: -14px;" class="badge bg-danger total_notification"></span>
                </div>
            </a>
        </button>
        <ul class="dropdown-menu" style="width: 300px;">
            <li><a class="dropdown-item"><small>Notification</small> <span style="float: right; margin-top: 3px;" class="badge bg-danger total_notification"></span> </a></li>
            @forelse (notification() as $dd)
            <hr>
            <li><a href="javascript:;" onClick="notification($(this),{{$dd->id}})" class="dropdown-item"><p class="text-primary" style="margin-bottom: 3px;">{{ isset($dd->loggable) ? $dd->loggable->title : '' }}</p> <small>{{ ucwords($dd->event) }}.</small>  <div style="float: right;"><small style="font-size: 12px;" class="text-secondary">{{ Carbon\Carbon::parse($dd->created_at)->diffForHumans() }}</small></div> </a></li>
            @empty
            @endforelse
            <div style="float: right; margin-top: 10px;">
                <a style="font-size: 13px; margin-left: -59px;" href="{{ route('notification') }}">View All</a>
            </div>
        </ul>
    </div>
</li>

<li style="margin-right: 19px" class="d-inline-block">
    <div class="dropdown">
        <button style="background-color: transparent; border: none;" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <a href="javascript:;" class="px-2">
                <img src="{{asset('assets/imgs/fi_message-square.svg')}}" alt="">
                <div style="margin-top: -35px; margin-right: -33px;">
                    <span style="height: 14px; width: 18px; font-size: 9px; margin-left: -14px;" class="badge bg-danger total_message"></span>
                </div>
            </a>
        </button>
        <ul class="dropdown-menu" style="width: 300px;">
            <li><a class="dropdown-item"><small>Messages</small> <span style="float: right; margin-top: 3px;" class="badge bg-danger total_message"></span> </a></li>
            @forelse (messages() as $aa)
            <hr>
            <li>
                <a href="javascript:;" onclick="message($(this),{{$aa->id}})" class="dropdown-item"><p class="text-primary" style="margin-bottom: 3px;">{{ isset($aa->from) ? $aa->from->full_name : '-' }}</p><small>{{ subStr($aa->message,0,22) }}....</small> <div style="float: right;"><small style="font-size: 12px;" class="text-secondary">{{ Carbon\Carbon::parse($aa->created_at)->diffForHumans() }}</small></div></a>
            </li>
            @empty
            @endforelse
            <div style="float: right; margin-top: 10px;">
                <a style="font-size: 13px; margin-left: -59px;" href="{{ route('messenger') }}">View All</a>
            </div>
        </ul>
    </div>
</li>
@endauth
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
                            <li><a class="dropdown-item" href="{{route('favourite.index')}}">Favourite</a></li>
                            <li><a class="dropdown-item" href="{{route('deposite')}}">My Deposite</a></li>
                            <li><a class="dropdown-item" href="{{route('booking')}}">My Booking</a></li>
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
