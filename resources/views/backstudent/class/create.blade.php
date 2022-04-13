@extends('backstudent.layouts.master')
@section('title','Ders Kayıt')
@section('content')
    @if($check != null)
      <p>Ders Kaydınız Zaten Gerçekleştirilmiştir.</p>
    @else
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                <div class="sparkline10-hd">
                    <div class="main-sparkline10-hd">
                        <h1>Ders Kayıt</h1>
                    </div>
                </div>
                <br>
                <div class="sparkline10-graph">
                    <div class="input-knob-dial-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <form method="post" action="{{route('student.lesson.create',$user->id)}}"
                                      class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="chosen-select-single">
                                                <select data-placeholder="Ders Seçiniz..." name="lesson_id[]"
                                                        class="chosen-select" multiple="multiple" tabindex="-1">
                                                    @foreach($lessons as $lesson)
                                                        <option value="{{ $lesson->id}}">{{$lesson->lesson}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-top:10px;">
                                            <div class="payment-adress">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
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
    @endif
@endsection

