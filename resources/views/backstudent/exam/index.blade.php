@include('backstudent.layouts.header')
@include('backstudent.layouts.menu')
@yield('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Notlar</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="lesson_id">Ders Adı</th>
                                    <th data-field="midterm_exam">Vize</th>
                                    <th data-field="final_exam">Final</th>
                                    <th data-field="makeup_exam">Bütünleme</th>
                                    <th>Ortalama</th>
                                    <th>Durum</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$check->id}}</td>
                                        <td>{{$lessonName->lesson}}</td>
                                        <td>{{$check->midterm_exam}}</td>
                                        <td>{{$check->final_exam}}</td>
                                        @if($check->makeup_exam)
                                            <td> {{$check->makeup_exam}}</td>
                                        @else
                                            <td>Sonuçlandırılmadı</td>
                                        @endif
                                        <td>{{$average}}</td>
                                        @if($average > 50)
                                            <td>Geçti</td>
                                        @else
                                            <td>Kaldı</td>
                                        @endif
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

@include('backstudent.layouts.footer')
