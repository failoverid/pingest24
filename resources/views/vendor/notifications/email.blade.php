<!-- resources/views/vendor/notifications/email.blade.php -->
{{-- Logo di atas --}}
<div style="text-align: center; margin-bottom: 20px;">
    <img src="https://i.ibb.co.com/gJsgJHL/P-NG-1.png" alt="Your Logo" style="width: 150px; height: auto;">
</div>

@component('mail::message')
{{-- Custom Text in Indonesian --}}
# Verifikasi Alamat Email Anda

Terima kasih telah mendaftar P!NGFEST 2024! Sebelum melanjutkan proses berikutnya, silakan verifikasi alamat email kamu dengan mengklik tombol di bawah ini.

@component('mail::button', ['url' => $actionUrl])
Verifikasi Email
@endcomponent

Jika kamu tidak membuat akun, tidak perlu melakukan tindakan lebih lanjut.

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent
