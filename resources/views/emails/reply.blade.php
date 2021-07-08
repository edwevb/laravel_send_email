@component('mail::message')
# Dear, {{$data['name']}}

Thank you for your feedback! please click button below to have conversation with me.
@component('mail::button', ['url' => 'https://t.me/edwevb'])
Get in touch
@endcomponent

Best Regards,<br>
Edward Evbert
@endcomponent
