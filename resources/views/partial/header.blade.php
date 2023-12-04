<style>
    .custom-search{position: relative;right:-12px;}
    #express-form-typeahead{background-color:transparent;background-image:url({{asset('assets/imgs/fi_search.svg')}});background-position:5px center;background-repeat:no-repeat;background-size:15px;border:none;cursor:pointer;height:30px;padding:0 0 0 34px;position:relative;-webkit-transition:width 1.1s ease, background 1.1s ease;transition:width 1.1s ease, background 1.1s ease;width:0;}
    .close-search{display:none;-webkit-animation: fadeEffect1 2s;animation: fadeEffect1 2s;
    position: absolute;top:9px;right:9px;background-image: url({{ asset('assets/imgs/cross.png') }});width: 15px;
    height: 15px;background-repeat: no-repeat;background-size: 15px;}
    #express-form-typeahead:focus{background-color:#fff;border-bottom:1px solid #e7e7e7;cursor:text;outline:0;width:200px;border-radius: 0;}
    .search-btn{display:none;}
    input[type="search"]{-webkit-appearance:textfield;}
   /* Fade in tabs */
    @-webkit-keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    @keyframes fadeEffect1 {
        from {opacity: 0;}
        to {opacity: 1;}
    }
</style>
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
                                <li><a class="dropdown-item"><small class="text-success">{{ $dd->loggable->title }}</small> <p>{{ ucwords($dd->event) }}.</p>  <div style="margin-top: -20px; float: right;"><small style="font-size: 12px;" class="text-secondary">{{ Carbon\Carbon::parse($dd->created_at)->diffForHumans() }}</small></div> </a></li>
                                @empty
                                @endforelse
                                <div style="float: right; margin-top: 10px;">
                                    <a style="font-size: 13px; margin-left: -59px;" href="{{ route('notification') }}">View All</a>
                                </div>
                            </ul>
                        </div>
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
<script>
//Search Bar
        var searchBar = document.getElementById("express-form-typeahead");
        searchBar.addEventListener('click' , function(){
            var closeSearch = document.getElementById("closeSearch");
            closeSearch.style.display = "block";
        });
        window.addEventListener('mouseup', e =>{
            //alert(e);
                if(e.target != searchBar && e.target.parentNode != searchBar )
                {
                    var closeSearch = document.getElementById("closeSearch");
                    closeSearch.style.display = "";
                }
        });</script>
