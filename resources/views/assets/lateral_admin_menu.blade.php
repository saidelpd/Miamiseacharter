<!-- COLUMN LEFT -->
<div id="col-left" class="col-left">
    <nav id="main-nav" class="main-nav">
        <h3>MAIN</h3>
        <ul class="main-menu">
            <li class="active">
                <a href="{{URL::route('admin.dashboard')}}" class="submenu-toggle">
                    <i class="fa fa-dashboard">
                    </i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
        </ul>

        <h3>USER SETTINGS</h3>
        <ul class="main-menu">
            <li>
                <a href="#" class="submenu-toggle"><i class="fa fa-user"></i><span class="text">Profile</span></a>
            </li>
            <li>
                <a href="{{url('/auth/logout')}}" class="submenu-toggle"><i class="fa fa-power-off"></i><span class="text">Logout</span></a>
            </li>
        </ul>
    </nav>
</div>
<!-- END COLUMN LEFT -->