
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Menu</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{url('dashboard')}}">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu pcoded-trigger" dropdown-icon="style1" subitem-icon="style1">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                            <span class="pcoded-mtext">Form</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="active">
                            <a href="{{route('viewStudent')}}"target="_self">
                                    <span class="pcoded-mtext">Student</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{route('inputScore')}}"target="_self">
                                    <span class="pcoded-mtext">InputScore</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                            <span class="pcoded-mtext">Report</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{route('reportStudent')}}"target="_self">
                                    <span class="pcoded-mtext">Student Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @if($user->role_name == 'Admin')
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)">
                                <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                <span class="pcoded-mtext">User & Role Mgt</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="">
                                        <span class="pcoded-mtext">Role Managment</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{url('user')}}">
                                        <span class="pcoded-mtext">User Managment</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>

