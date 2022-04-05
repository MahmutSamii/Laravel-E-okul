@extends('backstudent.layouts.master')
@section('title','Ders Kayıt')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                <div class="sparkline10-hd">
                    <div class="main-sparkline10-hd">
                        <h1>Ders Kayıt</h1>
                    </div>
                </div><br>
                <div class="sparkline10-graph">
                    <div class="input-knob-dial-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <form method="post" action="{{route('student.lesson.create',$user->id)}}" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="chosen-select-single">
                                                <select data-placeholder="Ders Seçiniz..." name="lesson_id[]" class="chosen-select" multiple="multiple" tabindex="-1">
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
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="sparkline11-list mg-tb-30 responsive-mg-t-0 nck-ds nk-ds-n-pro">
                <div class="sparkline11-hd">
                    <div class="main-sparkline11-hd">
                        <h1>Select 2</h1>
                    </div>
                </div>
                <div class="sparkline11-graph">
                    <div class="input-knob-dial-wrap">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="chosen-select-single mg-b-20">
                                    <label>Basic Select</label>
                                    <select class="select2_demo_3 form-control">
                                        <option>Select</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                    </select>
                                </div>
                                <div class="chosen-select-single">
                                    <label>Multi Select</label>
                                    <select class="select2_demo_2 form-control" multiple="multiple">
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
