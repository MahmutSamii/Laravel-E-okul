@include('backteacher.layouts.header')
@include('backteacher.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="{{asset($check->image)}}" alt=""/>
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Ad Soyad</b><br/>{{$check->name}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Telefon No.</b><br/> {{$check->phone}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="address-hr">
                                    <p><b>Email Adresi</b><br/> {{$check->email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Adres</b><br/> {{$check->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#reviews"> Profil</a></li>
                        <li><a href="#INFORMATION">Şifre Yenile</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane active in fade" id="reviews">
                            <div class="row">
                                <form method="post" action="{{route('teacher.settings.update.profile',$check->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="name" type="text" class="form-control"
                                                       placeholder="Ad Soyad">
                                            </div>
                                            <div class="form-group">
                                                <input name="address" type="text" class="form-control"
                                                       placeholder="Adres">
                                            </div>
                                            <div class="form-group">
                                                <input name="phone" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" placeholder="phone">
                                            </div>
                                            <div class="form-group">
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light mg-b-15">
                                                        Güncelle
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <form method="post" action="{{route('teacher.password.update',$check->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Lütfen Eski Şifrenizi Giriniz</label>
                                                <input type="password" title="Lütfen Eski Şifrenizi Giriniz"
                                                       placeholder="******" required name="old_password"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lütfen Şifrenizi Giriniz</label>
                                                <input type="password" title="Lütfen Şifrenizi Giriniz" id="password"
                                                       onkeyup='check();'
                                                       placeholder="******" required name="password"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Lütfen Tekrardan Şifrenizi Giriniz</label>
                                                <input type="password" title="Lütfen Tekrardan Şifrenizi Giriniz"
                                                       id="confirm_password" onkeyup='check();'
                                                       placeholder="******" required name="confirm_password"
                                                       class="form-control">
                                                <span id='message'></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light mg-b-15">
                                                        Güncelle
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backteacher.layouts.footer')


