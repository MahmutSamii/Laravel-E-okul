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
                                @foreach($check as $variable)
                                    <tr>
                                        @if ($variable->makeup_exam)
                                            <input type="hidden" {{$midtermExamAverage = ($variable->midterm_exam*20)/100}}>
                                            <input type="hidden" {{$finalExamAverage = ($variable->makeup_exam*80)/100}}>
                                            <input type="hidden" {{$average = ($midtermExamAverage+$finalExamAverage)}}>
                                        @else
                                            <input type="hidden" {{$midtermExamAverage = ($variable->midterm_exam*20)/100}}>
                                            <input type="hidden" {{$finalExamAverage = ($variable->final_exam*80)/100}}>
                                            <input type="hidden" {{$average = ($midtermExamAverage+$finalExamAverage)}}>
                                        @endif
                                        <td>{{$variable->id}}</td>
                                        <input type="hidden" {{$lessonName =  \App\Models\Lesson::where('id',$variable->lesson_id)->get()}}>
                                         @foreach($lessonName as $lesson)
                                        <td>{{$lesson->lesson}}</td>
                                         @endforeach
                                        <td>{{$variable->midterm_exam}}</td>
                                        <td>{{$variable->final_exam}}</td>
                                        @if($variable->makeup_exam)
                                            <td> {{$variable->makeup_exam}}</td>
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
