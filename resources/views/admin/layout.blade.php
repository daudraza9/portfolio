<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>@yield('page_title')</title>
    <!-- Fontfaces CSS-->
    <link href="{{asset('admin-assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin-assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin-assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('admin-assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
          media="all">
    <!-- Bootstrap CSS-->
    <link href="{{asset('admin-assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('admin-assets/css/theme.css')}}" rel="stylesheet" media="all">
{{--    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">--}}
    <link href="{{asset('admin-assets/css/select2.min.css')}}" rel="stylesheet"/>

</head>

<body>


<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="#">
                        <img src="{{asset('admin-assets/images/icon/logo.png')}}" alt="CoolAdmin"/>
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"><i class="fa fa-bars"></i></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul>
                    <li class="@yield('dashboard_select')">
                        <a href="{{route('admin.index')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="@yield('person_select')">
                        <a href="{{route('admin.person.index')}}">
                            <i class="fas fa-user"></i>Person</a>
                    </li>
                    <li class="@yield('portfolio_select')">
                        <a href="{{route('admin.portfolio.index')}}">
                            <i class="fas fa-image"></i>Portfolio</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('admin-assets/images/icon/logo.png')}}" alt="Cool Admin"/>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">

                    <li class="@yield('dashboard_select')">
                        <a href="{{route('admin.index')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="@yield('person_select')">
                        <a href="{{route('admin.person.index')}}">
                            <i class="fas fa-user"></i>Person</a>
                    </li>
                    <li class="@yield('portfolio_select')">
                        <a href="{{route('admin.portfolio.index')}}">
                            <i class="fas fa-image"></i>Portfolio</a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">

                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">

                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">

                                    <div class="content">
                                        <a class="js-acc-btn" href="#">admin</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">

                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>

                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="">
                                                <i class="zmdi zmdi-power"></i>Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @section('container')

                    @show

                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->

</div>

@include('admin.scripts')
</body>

</html>
<!-- end document-->
