<body>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('student.anasayfa')}}"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
            <strong></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{route('student.anasayfa')}}">
                            <span class="educate-icon educate-home"></span>
                            <span class="mini-click-non">Anasayfa</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Genel İşlemler</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Alınan Dersler" href="{{route('student.index')}}"><span class="mini-sub-pro">Alınan Dersler</span></a></li>
                            <li><a title="Sınav Takvimi" href="{{route('student.examdate.index')}}"><span class="mini-sub-pro">Sınav Takvimi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Ders İşlemleri</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Not Listesi" href="{{route('student.exam.index')}}"><span class="mini-sub-pro">Not Listesi</span></a></li>
                            <li><a title="Ders Kayıt" href="{{route('student.lesson.index')}}"><span class="mini-sub-pro">Ders Kayıt</span></a></li>
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
                    <a href="{{route('student.anasayfa')}}"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
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
                                                    <img {{$check = \App\Models\Student::where('student_no',\Illuminate\Support\Facades\Auth::user()->email)->first()}} @if($check) src="{{asset($check->image)}}" @endif/>
                                                    <span class="admin-name">{{Auth::user()->username}}</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="{{route('student.settings.index')}}"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Ayarları</a>
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
                                    <li><a data-toggle="collapse" data-target="#Charts" href="{{route('student.anasayfa')}}">Anasayfa <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Genel İşlemler <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="{{route('student.examdate.index')}}">Sınav Takvimi</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Ders Ve Dönem İşlemleri <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="{{route('student.lesson.index')}}">Ders Kayıt</a>
                                            </li>
                                            <li><a href="{{route('student.exam.index')}}">Not Listesi</a>
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



