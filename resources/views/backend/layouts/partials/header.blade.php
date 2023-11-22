<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo-dark mt-3">
                    {{-- <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo/library-logo.png') }}" alt="logo" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo/library-logo.png') }}" alt="logo" height="50">
                    </span> --}}
                    <span class="text-white text-uppercase">library management system</span>
                </a>

                <a href="#" class="logo-light mt-3">
                    {{-- <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo/library-logo.png') }}" alt="logo" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo/library-logo.png') }}" alt="logo" height="50">
                    </span> --}}
                    <span class="text-white text-uppercase">library management system</span>

                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/logo/library-logo.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item d-block" href="{{route('settings.index')}}"><i class="dripicons-gear d-inlne-block text-muted mr-2"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logoutform').submit()"><i class="fa fa-power-off mr-1"></i>Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutform">
                    {{ csrf_field() }}
                    </form>
                    </a>


                </div>
            </div>
        </div>
    </div>
</header>
