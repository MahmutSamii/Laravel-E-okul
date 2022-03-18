@include('back.layouts.header')
@include('back.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Kullanıcı Oluştur</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form method="post" id="acount-infor" action="{{route('admin.user.store')}}" class="acount-infor">
                                                @csrf
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{$schoolstuff->name}}" name="username"
                                                               placeholder="İsim Soyisim" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="department" class="form-control" disabled>
                                                            @foreach($schoolstuff->departments as $teacher)
                                                                    <option value="{{$teacher->id}}">{{$teacher->department_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{$schoolstuff->email}}" name="email"
                                                               placeholder="Email" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="password" type="password" class="form-control"
                                                               placeholder="Şifre">
                                                    </div>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Ekle</a>
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
        </div>
    </div>
</div>
@include('back.layouts.footer')

