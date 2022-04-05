@include('backteacher.layouts.header')
@include('backteacher.layouts.menu')
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
                                    <th data-field="department_name">Sınıf Adı</th>
                                    <th data-field="num_of_students">Mevcut Öğrenci Sayısı</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$class->id}}</td>
                                        <td>{{$class->class_name}}</td>
                                        <td>{{$numOfStudent}}</td>
                                        <td>
                                            <a href="{{route('teacher.index.student',$class->id)}}" title="Sınıfı Gör" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('backteacher.layouts.footer')
