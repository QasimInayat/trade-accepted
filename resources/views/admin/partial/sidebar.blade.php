<style>
    .bg-menu-theme.menu-vertical .menu-item.active>.menu-link:not(.menu-toggle) {
        background: linear-gradient(72.47deg, #e81110 22.16%, #e81110 76.47%);
        box-shadow: 0px 2px 6px 0px rgba(115,103,240,.48);
        color: #fff !important;
    }
    </style>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


      <div class="app-brand demo ">
          <div>
          <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('asset/img/trade-accepted-logo.png') }}" alt="" height="50px" width="200px"></a>
          </div>

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
          <i class="fa fa-bars"></i>
          <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>



      <ul class="menu-inner py-1"><br>
        <!-- Dashboards -->
        <li @if(url()->current() == Route::is('admin.dashboard')) class="menu-item active" @endif class="menu-item">
          <a href="{{ route('admin.dashboard') }}" class="menu-link">
            <i style="margin-right: 10px;" class="fa fa-dashboard"></i>
            <div>Dashboard</div>
          </a>
        </li>
        <li @if(url()->current() == Route::is('admin.vehicle_type.index' , 'admin.vehicle_type.create' , 'admin.vehicle_type.edit')) class="menu-item active" @endif class="menu-item">
            <a href="{{ route('admin.vehicle_type.index') }}" class="menu-link">
              <i style="margin-right: 10px;" class="fa fa-dashboard"></i>
              <div>Vehicle TYpe</div>
            </a>
          </li>



          <li class="menu-item">
            <a class="menu-link" href="{{ route('admin.login') }}" {{-- onclick="event.preventDefault(); document.getElementById('logout-form').submit();" --}}>
                <i style="margin-right: 10px;" class="fa fa-sign-out"></i>
                <div class="align-middle"> Log Out</div>
                {{-- <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                   @csrf
                </form> --}}
             </a>
        </li>

  </ul>


    </aside>