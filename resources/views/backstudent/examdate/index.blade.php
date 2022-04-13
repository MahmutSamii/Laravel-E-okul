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
                            <h1>Sınav Günleri</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="lesson_name">Ders Adı</th>
                                    <th data-field="exam_name">Sınav Adı</th>
                                    <th data-field="date">Tarih</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($examDate as $exam)
                                    <tr>
                                        <td>{{$exam->lesson_name}}</td>
                                        <td>{{$exam->exam_name}}</td>
                                        <td>{{$exam->date}}</td>
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
@include('backstudent.layouts.footer')
