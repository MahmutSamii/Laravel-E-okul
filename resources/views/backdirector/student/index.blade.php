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
                            <h1>Sınıflar Tablosu</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="image">Resim</th>
                                    <th data-field="name">Ad Soyad</th>
                                    <th data-field="classroom">Sınıfı</th>
                                    <th data-field="student_no">Öğrenci Numarası</th>
                                    <th data-field="parent_name">Ebeveyn İsmi</th>
                                    <th data-field="phone">Telefon Numarası</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td><a href="{{asset($student->image)}}" data-lightbox="r1" data-title="{{$student->name}}"><img width="150px" height="150px" src="{{asset($student->image)}}"/></a></td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->studentClasroom->class_name}}</td>
                                        <td>{{$student->student_no}}</td>
                                        <td>{{$student->parent_name}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <a href="{{route('admin.students.edit',$student->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
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
                                                            <p>Bu Öğrenci Kaydını Silmek İstediğinizden Emin misiniz!</p>
                                                        </div>
                                                        <div class="modal-footer footer-modal-admin warning-md">
                                                            <a data-dismiss="modal" href="{{route('admin.students.index')}}">İptal</a>
                                                            <a href="{{route('admin.students.destroy',$student->id)}}">Evet!</a>
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

@include('backdirector.layouts.footer')

