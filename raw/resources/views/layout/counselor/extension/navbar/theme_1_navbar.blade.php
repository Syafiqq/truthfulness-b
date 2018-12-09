<header class="main-header">
    <!-- Logo -->
    <a href="{{route('counselor.home.dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Truth</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Truthfulness</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {!! isset($pre_right_menu) ? $pre_right_menu : ''!!}
                <li class="dropdown messages-menu">
                    <a href="{{route('counselor.coupon.generator', ['counselor'])}}">
                        <i class="fa fa-ticket"></i>
                        Kode Registrasi Baru
                        <span class="label label-success"></span>
                    </a>
                </li>
                <li>
                    <a href="" id="music-opener" data-toggle="modal" data-target="#music-modal">
                        <i class="fa fa-music"></i>
                        Pemutar Musik
                    </a>
                </li>
                <li>
                    <a href="{{route('counselor.auth.logout')}}">
                        <i class="fa fa-power-off"></i>
                        Keluar Aplikasi
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
