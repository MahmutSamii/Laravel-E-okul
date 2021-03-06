@include('back.layouts.header')
@include('back.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Öğrenci Ekle</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form method="post" action="{{route('admin.students.store')}}"
                                                  class="dropzone dropzone-custom needsclick addcourse"
                                                  id="demo1-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control"
                                                                   placeholder="Ad Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="student_no" type="text" class="form-control"
                                                                  @if($students) value="{{$student_no.$students->count()+1}}" @else value="{{$student_no}}" @endif
                                                                   placeholder="Öğrenci Numarası">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="phone" type="number" class="form-control"
                                                                   placeholder="Telefon No">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="parent_name" type="text" class="form-control"
                                                                   placeholder="Ebeveyn ismi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <select name="classroom" class="form-control">
                                                            <option value="none" selected="" disabled="">Sınıf Seçiniz
                                                            </option>
                                                            @foreach($classes as $class)
                                                                <option
                                                                    value="{{$class->id}}">{{$class->class_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="image" type="file" class="form-control"
                                                                   placeholder="Resim">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12" style="margin-top:10px;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('back.layouts.footer')
