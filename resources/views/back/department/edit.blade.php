@include('back.layouts.header')
@include('back.layouts.menu')
@yield('content')
<div class="single-pro-review-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Departman Güncelle</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form id="add-department" method="post" action="{{route('admin.departments.update',$department->id)}}" class="add-department">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="department_name" type="text" class="form-control" value="{{$department->department_name}}" placeholder="Departman Adı">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="status" class="form-control">
                                                            <option value="none" selected="" disabled="">Durum Seçiniz</option>
                                                            <option @if($department->status == 1) selected="" @endif value="1">Aktif</option>
                                                            <option @if($department->status == 0) selected="" @endif value="0">Pasif</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Güncelle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('back.layouts.footer')
