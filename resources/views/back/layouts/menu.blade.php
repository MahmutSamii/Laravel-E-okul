<body>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('admin.anasayfa')}}"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
            <strong></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{route('admin.anasayfa')}}">
                            <span class="educate-icon educate-home"></span>
                            <span class="mini-click-non">Anasayfa</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Elemanlar</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Bütün ELemanlar" href="{{route('admin.teachers.index')}}"><span class="mini-sub-pro">Bütün Elemanlar</span></a></li>
                            <li><a title="Eleman Ekle" href="{{route('admin.teachers.create')}}"><span class="mini-sub-pro">Eleman Ekle</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Öğrenciler</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="{{route('admin.students.index')}}"><span class="mini-sub-pro">Bütün Öğrenciler</span></a></li>
                            <li><a title="Add Students" href="{{route('admin.students.create')}}"><span class="mini-sub-pro">Öğrenci Ekle</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.user.index')}}"><span class="fa fa-user-circle-o" aria-hidden="true"></span> <span class="mini-click-non">Kullanıcılar</span></a>
                    </li>
                    <li>
                        <a class="has-arrow  ml-5" href="#" aria-expanded="false"><img src="{{asset('back/img/education.png')}}" width="20px" > <span class="mini-click-non">Sınıflar</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="{{route('admin.classes.index')}}"><span class="mini-sub-pro">Bütün Sınıflar</span></a></li>
                            <li><a title="Add Courses" href="{{route('admin.classes.create')}}"><span class="mini-sub-pro">Sınıf Ekle</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Dersler</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="{{route('admin.lessons.index')}}"><span class="mini-sub-pro">Tüm Dersler</span></a></li>
                            <li><a href="{{route('admin.lessons.create')}}"><span class="mini-sub-pro">Ders Ekle</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departmanlar</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="{{route('admin.departments.index')}}"><span class="mini-sub-pro">Departman Listesi</span></a></li>
                            <li><a title="Add Departments" href="{{route('admin.departments.create')}}"><span class="mini-sub-pro">Departman Ekle</span></a></li>
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
                    <a href="{{route('admin.anasayfa')}}"><img class="main-logo" src="{{asset('back/img/logo/logo.png')}}" alt="" /></a>
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
                                    <li><a data-toggle="collapse" data-target="#Charts" href="{{route('admin.anasayfa')}}">Anasayfa <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Elemanlar <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="{{route('admin.teachers.index')}}">Bütün Elemanlar</a>
                                            </li>
                                            <li><a href="{{route('admin.teachers.create')}}">Eleman Ekle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Öğrenciler <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="{{route('admin.students.index')}}">Bütün Öğrenciler</a>
                                            </li>
                                            <li><a href="{{route('admin.students.create')}}">Öğrenci Ekle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#"> Sınıflar<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="{{route('admin.classes.index')}}">Bütün Sınıflar</a>
                                            </li>
                                            <li><a href="{{route('admin.classes.create')}}">Sınıf Ekle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Dersler <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="{{route('admin.lessons.index')}}">Bütün Dersler</a>
                                            </li>
                                            <li><a href="{{route('admin.lessons.create')}}">Ders Ekle</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departmanlar <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="{{route('admin.departments.index')}}">Bütün Departmanlar</a>
                                            </li>
                                            <li><a href="{{route('admin.departments.index')}}">Departman Ekle</a>
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
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>
    </div>



