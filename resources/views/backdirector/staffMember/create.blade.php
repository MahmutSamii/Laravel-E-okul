@include('backdirector.layouts.header')
@include('backdirector.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Eleman Ekle</a></li>
                        <li><a href="#reviews"> Kullanıcı Oluştur</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{route('admin.teachers.store')}}" method="post"
                                                  enctype="multipart/form-data"
                                                  class="dropzone dropzone-custom needsclick add-professors"
                                                  id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control"
                                                                   placeholder="İsim Soyisim">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="address" type="text" class="form-control"
                                                                   placeholder="Adres">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="phone" type="number" class="form-control"
                                                                   placeholder="Telefon no.">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" id="finish" type="email"
                                                                   class="form-control" placeholder="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="is_teacher" class="form-control">
                                                                <option value="none" selected="" disabled="">Öğretim
                                                                    Görevlisi mi?
                                                                </option>
                                                                <option value="1">Evet</option>
                                                                <option value="0">Hayır</option>
                                                            </select>
                                                        </div>
                                                        <select name="department" class="form-control">
                                                            <option value="none" selected="" disabled="">Departman
                                                                Seçiniz
                                                            </option>
                                                            @foreach($department as $teacher)
                                                                @if($teacher->status == 1)
                                                                <option value="{{$teacher->id}}">{{$teacher->department_name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="form-group">
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">
                                                                Ekle
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <form id="acount-infor" action="#" class="acount-infor">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="email"
                                                                   placeholder="Email">
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
</div>
@include('backdirector.layouts.footer')
