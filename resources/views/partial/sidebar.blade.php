
<aside>
    <div class="d-flex flex-column justify-content-between h-100">
        <ul class="list-unstyled side-nav">
            <li>
                <a href="javascript:;">
                    <img src="{{asset('assets/imgs/fi_layout.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="{{asset('assets/imgs/fi_align-left.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="{{asset('assets/imgs/fi_bell-1.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="{{asset('assets/imgs/fi_message-square-1.svg')}}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="{{asset('assets/imgs/fi_settings.svg')}}" alt="">
                </a>
            </li>
        </ul>
            <a href="javascript:;" class="d-block">
            <a href="javscript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout"> <img src="{{asset('assets/imgs/fi_log-out.svg')}}" alt="">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
    </div>
</aside>
