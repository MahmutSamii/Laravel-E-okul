@include('back.layouts.header')
@include('back.layouts.menu')
@yield('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Departman Tablosu</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="department_name">Departman Adı</th>
                                    <th data-field="status">Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($department as $depart)
                                <tr>
                                    <td>{{$depart->id}}</td>
                                    <td>{{$depart->department_name}}</td>
                                    @if($depart->status == 1)
                                    <td><i style="color:#0E993C;" class="fa fa-check" title="aktif"></i></td>
                                    @endif
                                    @if($depart->status == 0)
                                        <td><i style="color:#85060c;" class="fa fa-times" title="pasif"></i></td>
                                    @endif
                                    <td>
                                        <a href="{{route('admin.departments.edit',$depart->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
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
                                                        <p>Bu Departman Kaydını Silmek İstediğinizden Emin misiniz!</p>
                                                    </div>
                                                    <div class="modal-footer footer-modal-admin warning-md">
                                                        <a data-dismiss="modal" href="{{route('admin.departments.index')}}">İptal</a>
                                                        <a href="{{route('admin.departments.destroy',$depart->id)}}">Evet!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

@include('back.layouts.footer')
