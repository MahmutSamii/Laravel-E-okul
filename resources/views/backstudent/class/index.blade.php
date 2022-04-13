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
                            <h1>Dersler</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true">
                                <thead>
                                <tr>
                                    <th data-field="lesson_id">Ders Adı</th>
                                    <th data-field="teacher_name">Ders Veren</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($checkLesson as $check)
                                    <input type="hidden" {{$lessonName =\App\Models\Lesson::where('id',$check->lesson_id)->first()}}>
                                    <input type="hidden" {{$teacherName =\App\Models\SchoolStuff::where('id',$lessonName->lecturer)->first()}}>
                                    <tr>
                                        <td>{{$lessonName->lesson}}</td>
                                        <td>{{$teacherName->name}}</td>
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
