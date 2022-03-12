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
                                    <th data-field="department_name">Ders Adı</th>
                                    <th data-field="status">Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lessons as $lesson)
                                    <tr>
                                        <td>{{$lesson->id}}</td>
                                        <td>{{$lesson->lesson}}</td>
                                        @if($lesson->status == 1)
                                            <td><i style="color:#0E993C;" class="fa fa-check" title="aktif"></i></td>
                                        @endif
                                        @if($lesson->status == 0)
                                            <td><i style="color:#85060c;" class="fa fa-times" title="pasif"></i></td>
                                        @endif
                                        <td>
                                            <a href="{{route('admin.lessons.edit',$lesson->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('admin.lessons.destroy',$lesson->id)}}" title="Sil" class="btn btn-sm btn-danger delete" ><i class="fa fa-times"></i></a>
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
@section('js')
    <script>
        $('.delete').on('click', function (event) {
            console.log('sadasd');
            event.preventDefault();
            const url = $(this).attr('href');
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Bu Veriyi Silmek İstiyor musunuz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'İptal',
                confirmButtonText: 'Evet Sil!'
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });

    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

