<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Öğretmen Girişi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backdirector/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('backdirector/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('backdirector/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/')}}css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/')}}css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('backdirector/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('backdirector/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('backdirector/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('backdirector/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>Lütfen Giriş Bilgilerinizi Giriniz</h3>
            <p id="text">Öğretmen Girişi!</p>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    @if($errors->any())
                      <div class="alert alert-danger">
                          {{$errors->first()}}
                      </div>
                    @endif
                    <form action="#" method="post" id="loginForm">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="username">Kullanıcı Adı</label>
                            <input type="email" placeholder="örnek@gmail.com" title="Lütfen E-mail Adresinizi Giriniz" required name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Şifre</label>
                            <input type="password" title="Lütfen Şifrenizi Giriniz" placeholder="******" required name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success btn-block loginbtn">Giriş</button>
                        <button id="ogretmenBtn" type="button" style="width:200px; margin-top:5px" class="btn btn-primary">Öğretmen Girişi</button>
                        <button id="ogrenciBtn" type="button" style="width:215px; margin-top:5px" class="btn btn-primary">Öğrenci Girişi</button>
                        <input type="hidden" id="hiddenBtn" value="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
 var text        = document.getElementById('text');
 const ogretmenBtn = document.getElementById('ogretmenBtn');
 const ogrenciBtn  = document.getElementById('ogrenciBtn');
 var hiddenBtn   = document.getElementById('hiddenBtn');
 var loginForm = document.getElementById('loginForm');

 ogretmenBtn.addEventListener('click', function(){
     loginForm.action = "{{route('teacherLogin.post')}}";
     text.innerText="Öğretmen Girişi";
     hiddenBtn.value = 1;
 })

 ogrenciBtn.addEventListener('click', function(){
     loginForm.action = "#";
     text.innerText="Öğrenci Girişi"
     hiddenBtn.value= 2;
 })

</script>
<!-- jquery
    ============================================ -->
<script src="{{asset('backdirector/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('backdirector/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('backdirector/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('backdirector/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('backdirector/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('backdirector/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('backdirector/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('backdirector/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('backdirector/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('backdirector/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('backdirector/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backdirector/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- tab JS
    ============================================ -->
<script src="{{asset('backdirector/js/tab.js')}}"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('backdirector/js/icheck/icheck.min.js')}}"></script>
<script src="{{asset('backdirector/js/icheck/icheck-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('backdirector/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('backdirector/js/main.js')}}"></script>

</body>

</html>
