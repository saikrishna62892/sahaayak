@component('mail::message')
# Hello

Your Application has been rejected due to one or more of the following reasons
1) Working id invalid.
2) Identification proof invalid.

please signup again

@component('mail::button', ['url' => '/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent