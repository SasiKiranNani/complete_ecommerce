   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="">
            <img src="{{ asset('backend/images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
            <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="">
                <i class="zmdi zmdi-view-dashboard"></i>
                <span>Users</span>
            </a>
        </li>

        <!-- <li>
            <a href="">
                <i class="zmdi zmdi-invert-colors"></i>
                <span>Add Product </span>
            </a>
        </li> -->

        <li>
            <a href="{{ route('categories.index') }}">
                <i class="zmdi zmdi-grid"></i> <span>Categories</span>
            </a>
        </li>
        
        <li>
            <a href="{{route('brands.index')}}">
                <i class="zmdi zmdi-grid"></i> <span>Brands</span>
            </a>
        </li>

        <li>
            <a href="{{route('products.index')}}">
                <i class="zmdi zmdi-format-list-bulleted"></i>
                <span>View Product</span>
            </a>
        </li>

        <li>
            <a href="{{route('cart_details')}}">
                <i class="zmdi zmdi-calendar-check"></i>
                <span>Cart</span>
                <small class="badge float-right badge-light">New</small>
            </a>
        </li>

        <li>
            <a href="">
                <i class="zmdi zmdi-face"></i> <span>Orders</span>
            </a>
        </li>

        <li>
            <a href="#" target="_blank">
                <i class="zmdi zmdi-lock"></i> <span>Login</span>
            </a>
        </li>

        <li>
            <a href="#" target="_blank">
                <i class="zmdi zmdi-account-circle"></i>
                <span>Registration</span>
            </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i>
                <span>Important</span></a>
        </li>
        <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                <span>Warning</span></a>
        </li>
        <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i>
                <span>Information</span></a>
        </li>
    </ul>
</div>
<!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords" />
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form>
            </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item dropdown-lg">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                    href="javascript:void();">
                    <i class="fa fa-envelope-open-o"></i></a>
            </li>
            <li class="nav-item dropdown-lg">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                    href="javascript:void();">
                    <i class="fa fa-bell-o"></i></a>
            </li>
            <li class="nav-item language">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                    href="javascript:void();"><i class="fa fa-flag"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item">
                        <i class="flag-icon flag-icon-gb mr-2"></i>
                        English
                    </li>
                    <li class="dropdown-item">
                        <i class="flag-icon flag-icon-fr mr-2"></i>
                        French
                    </li>
                    <li class="dropdown-item">
                        <i class="flag-icon flag-icon-cn mr-2"></i>
                        Chinese
                    </li>
                    <li class="dropdown-item">
                        <i class="flag-icon flag-icon-de mr-2"></i>
                        German
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                            alt="user avatar" /></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar">
                                    <img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                                        alt="user avatar" />
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">
                                        Sarajhon Mccoy
                                    </h6>
                                    <p class="user-subtitle">
                                        mccoy@example.com
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                        <i class="icon-envelope mr-2"></i> Inbox
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                        <i class="icon-wallet mr-2"></i> Account
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                        <i class="icon-settings mr-2"></i> Setting
                    </li>
                    <li class="dropdown-divider"></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <li class="dropdown-item">
                        <a href="{{ route('logout') }}" style="text-decoration: none;"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon-power mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!--End topbar header-->



<div class="clearfix"></div>