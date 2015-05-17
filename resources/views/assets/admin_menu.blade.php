<!-- TOP NAV BAR -->
<nav class="top-bar navbar-fixed-top" role="navigation">
    <div class="logo-area">
        <a href="#" id="btn-nav-sidebar-minified" class="btn  btn-nav-sidebar-minified pull-left"><i class="fa fa-exchange"></i></a>
        <a class="btn btn-link btn-off-canvas pull-left"><i class="fa fa-navicon"></i></a>
        <div class="logo pull-left">
            <a href="{{URL::route('admin.dashboard')}}">
                <img src="assets/img/queenadmin-logo.png" alt="Miami Sea Charter Logo" />
            </a>
        </div>
    </div>
    <div class="top-bar-right pull-right">
        <div class="action-group hidden-xs hidden-sm">
            <ul>
                <!-- notification: inbox -->
                <li class="action-item inbox">
                    <div class="btn-group">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="count">0</span>
                        </a>
                        <div class="arrow"></div>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menu-item-header">You have 0 unread messages</li>
                        </ul>
                    </div>
                </li>
                <!-- end notification: inbox -->

                <!-- notification: general -->
                <li class="action-item general">
                    <div class="btn-group">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="count">0</span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menu-item-header">You have 0 notifications</li>
                        </ul>
                    </div>
                </li>
                <!-- end notification: general -->
            </ul>
        </div>
        <div class="logged-user right-50">
            <div class="btn-group">
                <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                    <span class="name">{{$user->getName()}} <i class="fa fa-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{URL::route('users.profile')}}">
                            <i class="fa fa-user"></i>
                            <span class="text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/auth/logout')}}">
                            <i class="fa fa-power-off"></i>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END TOP NAV BAR -->