@include('backteacher.layouts.header')
@include('backteacher.layouts.menu')
@yield('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Takvim</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="content w-100">
                    <div class="calendar-container">
                        <div class="calendar">
                            <div class="year-header">
                                <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                <span class="year" id="label"></span>
                                <span class="right-button fa fa-chevron-right" id="next"> </span>
                            </div>
                            <table class="months-table w-100">
                                <tbody>
                                <tr class="months-row">
                                    <td class="month">Ocak</td>
                                    <td class="month">Şubat</td>
                                    <td class="month">Mart</td>
                                    <td class="month">Nisan</td>
                                    <td class="month">Mayıs</td>
                                    <td class="month">Haziran</td>
                                    <td class="month">Temmuz</td>
                                    <td class="month">Ağustos</td>
                                    <td class="month">Eylül</td>
                                    <td class="month">Ekim</td>
                                    <td class="month">Kasım</td>
                                    <td class="month">Aralık</td>
                                </tr>
                                </tbody>
                            </table>

                            <table class="days-table w-100">
                                <td class="day">Pazartesi</td>
                                <td class="day">Salı</td>
                                <td class="day">Çarşamba</td>
                                <td class="day">Perşembe</td>
                                <td class="day">Cuma</td>
                                <td class="day">Cumartesi</td>
                                <td class="day">Pazar</td>
                            </table>
                            <div class="frame">
                                <table class="dates-table w-100">
                                    <tbody class="tbody">
                                    </tbody>
                                </table>
                            </div>
                            <button class="button" id="add-button">Not Ekle</button>
                        </div>
                    </div>
                    <div class="events-container">
                    </div>
                    <div class="dialog" id="dialog">
                        <h2 class="dialog-header"> Yeni Not Ekle</h2>
                        <form class="form" id="form">
                            @csrf
                            <div class="form-container" align="center">
                                <label class="form-label" id="valueFromMyButton" for="name">Ad Soyad</label>
                                <input class="input" name="username" value="{{$user->username}}" type="text" id="name">
                                <input type="hidden" value="{{$user->resource_id}}">
                                <label class="form-label" id="valueFromMyButton" for="content">Not İçeriği</label>
                                <textarea class="input" type="text" id="content" maxlength="7" required></textarea>
                                <input type="button" value="İptal" class="button" id="cancel-button">
                                <input type="submit" value="Kaydet" class="button button-white" id="ok-button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('backteacher.layouts.footer')










