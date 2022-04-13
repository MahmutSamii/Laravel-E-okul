@extends('backstudent.layouts.master')
@section('title','Anasayfa')
@section('content')
    <br><br>
    <div class="widget-program-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="text-center content-bg-pro">
                                <h3>Sınıf Öğretmeni</h3>
                                <small>
                                    {{$teacher->name}}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                        <div class="panel-body">
                            <div class="text-center content-bg-pro">
                                <h3>Kayıt Tarihi</h3>
                                <small>
                                    {{$checkClass->created_at}}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


