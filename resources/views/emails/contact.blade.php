@component('mail::message')
# You received an email from {{$data['name']}} | {{$data['email']}}
## Body;
{{$data['messages']}}

@component('mail::button', ['url' => 'mailto:edwardevbert@gmail.com'])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
