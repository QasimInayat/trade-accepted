<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
       <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
       <i class="fa fa-bars"></i>
       </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
       <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
             <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
             <i style="margin-right: 15px;" class="fa fa-search"></i>
             <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
             </a>
          </div>
       </div>
       <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li>
            <a href="{{ url('/') }}"><i style="color: #e81110; font-size: 30px;" class="fa fa-globe"></i></a>
        </li>
          <li style="margin-right: 10px; display:none">
             <a href=""><i style="font-size: 25px; color: #6f6b7d;" class="fa fa-globe"></i></a>
          </li>
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                   <img src="{{asset('asset/img/avatars/1.png')}}" alt="" class="h-auto rounded-circle">
                </div>
             </a>
             <ul class="dropdown-menu dropdown-menu-end">
                <li>
                   <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                         <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                               <img src="{{asset('asset/img/avatars/1.png')}}" alt="" class="h-auto rounded-circle">
                            </div>
                         </div>
                         <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ ucwords(admin()->name) }}</span>
                            <small class="text-muted">Admin</small>
                         </div>
                      </div>
                   </a>
                </li>
                <!-- <li>
                   <div class="dropdown-divider"></div>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-profile-influencer.html">
                     <i class="ti ti-user-check me-2 ti-sm"></i>
                     <span class="align-middle">My Profile</span>
                   </a>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-account-settings-account.html">
                     <i class="ti ti-settings me-2 ti-sm"></i>
                     <span class="align-middle">Settings</span>
                   </a>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-account-settings-billing.html">
                     <span class="d-flex align-items-center align-middle">
                       <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                       <span class="flex-grow-1 align-middle">Billing</span>
                       <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                     </span>
                   </a>
                   </li>
                   <li>
                   <div class="dropdown-divider"></div>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-help-center-landing.html">
                     <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                     <span class="align-middle">Help</span>
                   </a>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-faq.html">
                     <i class="ti ti-help me-2 ti-sm"></i>
                     <span class="align-middle">FAQ</span>
                   </a>
                   </li>
                   <li>
                   <a class="dropdown-item" href="pages-pricing.html">
                     <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                     <span class="align-middle">Pricing</span>
                   </a>
                   </li> -->
                <li>
                   <div class="dropdown-divider"></div>
                </li>
                <li>
                   <a class="dropdown-item" href="javascript:;"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fa fa-power-off"></i>
                      <span class="align-middle">Log Out</span>
                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                         @csrf
                      </form>
                   </a>
                </li>
             </ul>
          </li>
       </ul>
    </div>
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
       <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
       <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
 </nav>
 </div>
