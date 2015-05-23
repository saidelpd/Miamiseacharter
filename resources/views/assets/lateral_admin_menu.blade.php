<!-- COLUMN LEFT -->
<div id="col-left" class="col-left">
    <nav id="main-nav" class="main-nav">
        <h3>MAIN</h3>
        <ul class="main-menu">
            <li  @if(URL::current()==URL::route('admin.dashboard')) class="active" @endif>
                <a href="{{URL::route('admin.dashboard')}}">
                    <i class="fa fa-dashboard">
                    </i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li  @if(URL::current()==URL::route('appointments.index')) class="active" @endif>
                <a href="{{URL::route('appointments.index')}}">
                    <i class="fa fa-calendar">
                    </i>
                    <span class="text">Reservations</span>
                </a>
            </li>
        </ul>
        <h3>USER SETTINGS</h3>
        <ul class="main-menu">
            <li @if(URL::current()==URL::route('users.profile')) class="active" @endif>
                <a href="{{URL::route('users.profile')}}"><i class="fa fa-user"></i><span class="text">My Profile</span></a>
            </li>
            <li>
                <a href="{{url('/auth/logout')}}" class="submenu-toggle"><i class="fa fa-power-off"></i><span class="text">Logout</span></a>
            </li>
        </ul>
    </nav>
</div>
<!-- END COLUMN LEFT -->