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
                            <h1>{{$class->class_name}} Mevcut Öğrenci Tablosu</h1>
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
                                    <th data-field="student_no">Öğrenci Numarası</th>
                                    <th data-field="parent_name">Ebeveyn İsmi</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td><a href="{{asset($student->image)}}" data-lightbox="r1"
                                                   data-title="{{$student->name}}"><img width="100px" height="100px"
                                                                                        src="{{asset($student->image)}}"/></a>
                                            </td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->student_no}}</td>
                                            <td>{{$student->parent_name}}</td>
                                            <td>
                                                <a href="{{route('teacher.create.student',$student->id)}}"
                                                   title="Not Ver"
                                                   class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
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
@include('backteacher.layouts.footer')
