<header class="py-3 px-2">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo-head d-flex align-items-center gap-3">
                <img src="{{asset('assets/imgs/logo.png')}}" alt="" class="d-block">
                <h1 class="mb-0">Dashboard</h1>
            </div>
            <div class="vertical-nav d-flex align-items-center">
                <ul class="list-unstyled text-end d-lg-block d-none mb-0">
                    <li class="d-inline-block">
                        <button class="btn btn-primary w-fit" ><a href="{{route('vehicle.create')}}"> Add Listing </a></button>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:;" class="px-2">
                            <img src="{{asset('assets/imgs/fi_search.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:;" class="px-2">
                            <img src="{{asset('assets/imgs/fi_bell.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:;" class="px-2">
                            <img src="{{asset('assets/imgs/fi_message-square.svg')}}" alt="">
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="javascript:;" class="px-2">
                            <img src="{{asset('assets/imgs/fi_help-circle.svg')}}" alt="">
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle auth-dropdown" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="user-image">
                                <img src="{{asset('upload/user/'. auth()->user()->image)}}" alt="">
                            </span>
                            <span class="d-md-inline d-none">Welcome back, {{ auth()->user()->first_name }}{{ auth()->user()->last_name }}!</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
