<style>
    .bg-menu-theme.menu-vertical .menu-item.active>.menu-link:not(.menu-toggle) {
        background: linear-gradient(72.47deg, #e81110 22.16%, #e81110 76.47%);
        box-shadow: 0px 2px 6px 0px rgba(115,103,240,.48);
        color: #fff !important;
    }
    .bg-menu-theme.menu-vertical .menu-sub>.menu-item>.menu-link:before {
    left: -5rem;
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
        <li @if(url()->current() == Route::is('admin.user')) class="menu-item active" @endif  class="menu-item">
            <a href="{{ route('admin.user') }}" class="menu-link">
              <i style="margin-right: 10px;" class="fa fa-user"></i>
              <div> User</div>
            </a>
          </li>

          <li @if(url()->current() == Route::is('admin.reviews')) class="menu-item active" @endif  class="menu-item">
            <a href="{{ route('admin.reviews') }}" class="menu-link">
              <i style="margin-right: 10px;" class="fa fa-star-o"></i>
              <div> Reviews</div>
            </a>
          </li>

        <li @if(url()->current() == Route::is('admin.vehicle.index')) class="menu-item active" @endif class="menu-item">
            <a href="{{ route('admin.vehicle.index') }}" class="menu-link">
              <i style="margin-right: 10px;" class="fa fa-car"></i>
              <div>Vehicle</div>
            </a>
          </li>
          <li @if(url()->current() == Route::is('admin.transaction','admin.transaction.detail')) class="menu-item active" @endif class="menu-item">
            <a href="{{ route('admin.transaction') }}" class="menu-link">
              <i style="margin-right: 10px;" class="fa fa-credit-card"></i>
              <div>Transactions</div>
            </a>
          </li>
          <li @if(url()->current() == Route::is('admin.make.index','admin.make.create','admin.make.edit','admin.vehicle_type.index','admin.vehicle_type.create','admin.vehicle_type.edit','admin.product_attribute.index','admin.product_attribute.create','admin.product_attribute.edit','admin.product.index','admin.product.create','admin.product.edit')) class="menu-item active" @endif class="menu-item"  style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon fa fa-caret-down"></i>
              <div data-i18n="Setups">Setups</div>
            </a>
            <ul class="menu-sub">
            <li @if(url()->current() == Route::is('admin.make.index','admin.make.create','admin.make.edit')) class="menu-item active" @endif class="menu-item">
                  <a href="{{ route('admin.make.index') }}" class="menu-link" >
                    <i style="margin-right: 10px;" class="fa fa-file"></i>
                    <div>Make</div>
                  </a>
                </li>
                <li @if(url()->current() == Route::is('admin.vehicle_type.index','admin.vehicle_type.create','admin.vehicle_type.edit')) class="menu-item active" @endif class="menu-item">
                  <a href="{{ route('admin.vehicle_type.index') }}" class="menu-link" >
                    <i style="margin-right: 10px;" class="fa fa-car"></i>
                    <div>Vehicle Type</div>
                  </a>
              </li>

            </ul>
          </li>




          <li class="menu-item">
            <a class="menu-link" href="javascript:;"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                <i style="margin-right: 10px;" class="fa fa-sign-out"></i>
                <div class="align-middle"> Log Out</div>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                   @csrf
                </form>
             </a>
        </li>



  </ul>


    </aside>
