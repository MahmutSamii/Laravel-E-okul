@include('back.layouts.header')
@include('back.layouts.menu')
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
                                            <form method="post" action="{{route('admin.classes.update',$classes->id)}}" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="class_name" type="text" value="{{$classes->class_name}}" class="form-control" placeholder="Sınıf Adı">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="quota" type="text" value="{{$classes->quota}}" class="form-control" placeholder="Kontenjan">
                                                        </div>
                                                        <select name="teacher_of_class" class="form-control">
                                                            <option value="none" selected="" disabled="">Sınf Öğretmeni</option>
                                                            @foreach($teacher as $teach)
                                                                @foreach($teach->departments as $department)
                                                                    @if($department->slug != "mudur")
                                                                        <option @if($classes->teacher_of_class == $department->id) selected @endif value="{{$department->id}}">{{$teach->name.' | '.$department->department_name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Ekle</button>
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
