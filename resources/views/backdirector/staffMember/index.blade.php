@include('backdirector.layouts.header')
@include('backdirector.layouts.menu')
@yield('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Dersler Tablosu</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="image">image</th>
                                    <th data-field="department_name">Departman</th>
                                    <th data-field="name">Ad Soyad</th>
                                    <th data-field="address">Adres</th>
                                    <th data-field="email">Email</th>
                                    <th data-field="phone">Telefon No</th>
                                    <th data-field="is_teacher">Öğretim Görvelisi mi?</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($schoolStuff as $staff)
                                    <tr>
                                        <td>{{$staff->id}}</td>
                                        @if($staff->image)
                                        <td><a href="{{asset($staff->image)}}" data-lightbox="r1" data-title="{{$staff->name}}"><img src="{{asset($staff->image)}}"/></a></td>
                                        @else
                                        <td><img src="{{asset('backdirector/img/logo/logo.png')}}" data-lightbox="r1" width="200px" height="200px"/></td>
                                        @endif
                                        @foreach($staff->departments as $department)
                                        <td>{{$department->department_name}}</td>
                                        @endforeach
                                        <td>{{$staff->name}}</td>
                                        <td>{{$staff->address}}</td>
                                        <td>{{$staff->email}}</td>
                                        <td>{{$staff->phone}}</td>
                                        @if($staff->is_teacher == 1)
                                            <td><i style="color:#0E993C;" class="fa fa-check" title="Evet"></i></td>
                                        @endif
                                        @if($staff->is_teacher == 0)
                                            <td><i style="color:#85060c;" class="fa fa-times" title="Hayır"></i></td>
                                        @endif
                                        <td>
                                            <a href="{{route('admin.teachers.edit',$staff->id)}}" title="Düzenle" class="btn btn-sm btn-primary col-4"><i class="fa fa-pencil"></i></a>
                                            <a class="Warning Warning-color btn btn-sm btn-danger" id="delete" href="" title="Sil" data-toggle="modal" data-target="#WarningModalftblack"><i class="fa fa-times"></i></a>
                                            <div id="WarningModalftblack" class="modal modal-edu-general Customwidth-popup-WarningModal PrimaryModal-bgcolor fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                                                            <h2>Uyarı!</h2>
                                                            <p>Bu Eleman Kaydını Silmek İstediğinizden Emin misiniz!</p>
                                                        </div>
                                                        <div class="modal-footer footer-modal-admin warning-md">
                                                            <a data-dismiss="modal" href="{{route('admin.teachers.index')}}">İptal</a>
                                                            <a href="{{route('admin.teachers.destroy',$staff->id)}}">Evet!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('admin.user.create',$staff->id)}}" title="Kullanıcı Oluştur" class="btn btn-sm btn-success col-4"><i class="fa fa-user"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backdirector.layouts.footer')


