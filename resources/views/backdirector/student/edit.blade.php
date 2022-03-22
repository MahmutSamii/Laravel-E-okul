@include('backdirector.layouts.header')
@include('backdirector.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Ders Ekle</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form method="post" action="{{route('admin.students.update',$students->id)}}" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" value="{{$students->name}}"
                                                                   placeholder="Ad Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="student_no" type="text" class="form-control"
                                                                   value="{{$students->student_no}}"
                                                                   placeholder="Öğrenci Numarası">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="phone" type="text" class="form-control" value="{{$students->phone}}"
                                                                   placeholder="Telefon No">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="parent_name" type="text" class="form-control" value="{{$students->parent_name}}"
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
                                                                <option @if($students->classroom == $class->id) selected @endif value="{{$class->id}}">{{$class->class_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="image" type="file" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <a href="{{asset($students->image)}}" data-lightbox="r1" data-title="{{$students->name}}"><img width="100" src="{{asset($students->image)}}"/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Güncelle</button>
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
@include('backdirector.layouts.footer')
