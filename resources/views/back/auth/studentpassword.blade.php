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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('back/img/favicon.ico')}}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/normalize.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/main.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/')}}css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/')}}css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('back/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/form/all-type-forms.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('back/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>Lütfen Giriş Bilgilerinizi Giriniz</h3>
            <p id="text">Öğretmen Girişi!</p>
        </div>
        <a href="{{route('teacherLogin')}}" class="btn btn-primary btn-sm">Geri</a>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{route('student.create.password.post')}}" method="post" id="loginForm">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="student_no">Öğrenci Numarası</label>
                            <input type="number" placeholder="123456789" title="Lütfen Öğrenci Numaranızı Giriniz"
                                   required name="student_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Şifre Oluştur</label>
                            <input type="password" title="Lütfen Şifrenizi Giriniz" id="password" onkeyup='check();'
                                   placeholder="******" required name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Şifreyi Tekrar Giriniz</label>
                            <input type="password" title="Lütfen Şifrenizi Tekrar Giriniz" placeholder="******"
                                   onkeyup='check();' required id="confirm_password" class="form-control">
                            <span id='message'></span>
                        </div>
                        <button type="submit" class="btn btn-success btn-block loginbtn">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var check = function () {
        if (document.getElementById('password').value == '' || document.getElementById('confirm_password').value == '') {
            document.getElementById('message').innerHTML = '';
        } else if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Şifreler eşleşiyor';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Şifreler eşleşmiyor';
        }
    }
</script>
<!-- jquery
    ============================================ -->
<script src="{{asset('back/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('back/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('back/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('back/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('back/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('back/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('back/js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('back/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{asset('back/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('back/js/metisMenu/metisMenu-active.js')}}"></script>
<!-- tab JS
    ============================================ -->
<script src="{{asset('back/js/tab.js')}}"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('back/js/icheck/icheck.min.js')}}"></script>
<script src="{{asset('back/js/icheck/icheck-active.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('back/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('back/js/main.js')}}"></script>

</body>

</html>
