<body>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('teacher.anasayfa')}}"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
            <strong></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{route('teacher.anasayfa')}}">
                            <span class="educate-icon educate-home"></span>
                            <span class="mini-click-non">Anasayfa</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('teacher.create.exam.date')}}" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Sınav Takvimi</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><img src="{{asset('back/img/education.png')}}" width="20px" > <span class="mini-click-non">Sınıflarım</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Sınıflarım" href="{{route('teacher.class.index')}}"><span class="mini-sub-pro">Girdiğim Sınıflar</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-6 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img {{$schoolStuff = \App\Models\SchoolStuff::where('id',\Illuminate\Support\Facades\Auth::user()->resource_id)->first()}} @if($schoolStuff->image != null) src="{{asset($schoolStuff->image)}}" @elseif($schoolStuff->image == null) src="{{asset('back/img/contact/2.jpg')}}" @endif/>
                                                    <span class="admin-name">{{Auth::user()->username}}</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="{{route('teacher.settings.index')}}"><span class="edu-icon edu-user-rounded author-log-ic"></span>Profil Ayarları</a>
                                                    </li>
                                                    <li><a href="{{route('admin.logout')}}"><span class="edu-icon edu-locked author-log-ic"></span>Çıkış Yap</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="{{route('teacher.anasayfa')}}">Anasayfa <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#"> Sınıflarım<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="{{route('teacher.class.index')}}">Girdiğim Sınıflar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




