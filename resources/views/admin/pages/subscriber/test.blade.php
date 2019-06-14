@component('mail::message')
# Holol Mail Services

{{$subject}}

@component('mail::button', ['url' => 'http://localhost/PHP-Apps/Holol'])
Visit Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}.
@endcomponent
