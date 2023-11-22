            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li>
                                <a href="{{route('admin.dashboard')}}" class="waves-effect">
                                    <i class="mdi mdi-speedometer"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-settings-transfer-outline"></i>
                                    <span>System</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('permission.index')}}">Permissions</a></li>
                                    <li><a href="{{route('role.index')}}">Roles</a></li>
                                    <li><a href="{{route('user.index')}}">Users</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('settings.index')}}" class="waves-effect">
                                    <i class="mdi mdi-tools"></i>
                                    <span>Settings</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->