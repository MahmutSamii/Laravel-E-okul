@component('mail::message')
# Üye Kayıt Bilgileriniz

İyi Günler {{$data['name']}}.

Sisteme Giriş İçin Kullanmanız Gerek Şifre : {{$data['password']}}
@component('mail::button', ['url' => route('teacherLogin')])
Siteye Git
@endcomponent

Teşekkürler,<br>
{{ config('app.name') }}
@endcomponent
