@include('backteacher.layouts.header')
@include('backteacher.layouts.menu')
@yield('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Not Ekle</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <div class="single-pro-review-area mt-t-30 mg-b-15">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="profile-info-inner">
                                                                <div class="profile-img">
                                                                    <img src="{{asset($student->image)}}" alt=""/>
                                                                </div>
                                                                <div class="profile-details-hr">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-3">
                                                                            <div class="address-hr">
                                                                                <p><b>Ad
                                                                                        Soyad</b><br/> {{$student->name}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-3">
                                                                            <div class="address-hr">
                                                                                <p><b>Öğrenci
                                                                                        Numarası</b><br/> {{$student->student_no}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <form method="post"
                                                                 @if ($exam) action="{{route('teacher.update.student',$student->id)}}" @else action="{{route('teacher.store.student',$student->id)}}" @endif
                                                                  class="dropzone dropzone-custom needsclick addcourse"
                                                                  id="demo1-upload" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group">
                                                                            <input name="midterm_exam" min="0" max="100"
                                                                                   type="number" class="form-control"
                                                                                   placeholder="Vize"
                                                                                   @if($exam) value="{{$exam->midterm_exam}}" @endif>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="final_exam" min="0" max="100"
                                                                                   type="number" class="form-control"
                                                                                   placeholder="Final"
                                                                                   @if($exam) value="{{$exam->final_exam}}" @endif>
                                                                            <input type="hidden" value="{{$lesson->id}}"
                                                                                   name="lesson_id">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="makeup_exam" min="0" max="100"
                                                                                   type="number" class="form-control"
                                                                                   placeholder="Bütünleme"
                                                                                   @if($exam) value="{{$exam->makeup_exam}}" @endif>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12" style="margin-top:10px;">
                                                                        <div class="payment-adress">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary waves-effect waves-light">@if(!$exam == null)
                                                                                    Güncelle @else Ekle @endif</button>
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
            </div>
        </div>
    </div>
</div>
@include('backteacher.layouts.footer')
