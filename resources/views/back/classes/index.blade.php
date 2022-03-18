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
                                    <th data-field="quota">Kontenjan</th>
                                    <th data-field="num_of_students">Mevcut Öğrenci Sayısı</th>
                                    <th data-field="teacher_of_class">Sınıf Öğretmeni</th>
                                    <th data-field="vacancy">Boş Yer</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($classes as $class)
                                    <tr>
                                        <td>{{$class->id}}</td>
                                        <td>{{$class->class_name}}</td>
                                        <td>{{$class->quota}}</td>
                                        <td>{{$class->num_of_students}}</td>
                                        @foreach($class->schoolStuffs as $name)
                                          <td>{{$name->name}}</td>
                                        @endforeach
                                        <td>{{$class->vacancy}}</td>
                                        <td>
                                            <a href="{{route('admin.classes.edit',$class->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('admin.classes.destroy',$class->id)}}" title="Sil" id="delete" class="btn btn-sm btn-danger" onclick="return control()" ><i class="fa fa-times"></i></a>
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

