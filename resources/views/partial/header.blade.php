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
                        <a href="{{ route('search') }}" class="px-2">
                            <img src="{{asset('assets/imgs/fi_search.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:;" class="px-2">
                            <img src="{{asset('assets/imgs/fi_bell.svg')}}" alt="">
                        </a>
                    </li>
                    <li style="margin-right: 15px" class="d-inline-block">
                        <a href="{{ route('messenger') }}" class="px-2">
                            <img src="{{asset('assets/imgs/fi_message-square.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a style="font-size: 1px;" href="javascript:;" class="px-2">
                           .
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
                                <img src="{{asset('assets/imgs/placeholder1.jpg')}}" alt="">
                                @endif
                            </span>
                            <span class="d-md-inline d-none">Welcome back, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</span>
                        </button>
                        <ul class="dropdown-menu">
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
