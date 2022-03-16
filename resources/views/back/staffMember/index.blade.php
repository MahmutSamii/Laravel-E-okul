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
                                        <td><a href="{{asset($staff->image)}}" data-lightbox="r1" data-title="title"><img src="{{asset($staff->image)}}"/></a></td>
                                        @else
                                        <td><img src="{{asset('back/img/logo/logo.png')}}" data-lightbox="r1" width="200px" height="200px"/></td>
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
                                            <a href="{{route('admin.teachers.edit',$staff->id)}}" title="Düzenle" class="btn btn-sm btn-primary col-6"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('admin.teachers.destroy',$staff->id)}}" title="Sil" id="delete" class="btn btn-sm btn-danger col-6"><i class="fa fa-times"></i></a>
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


