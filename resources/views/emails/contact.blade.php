@component('mail::message')
# You received an email!
<small>Date : {{\Carbon\Carbon::now()->format('M d Y');}}</small>
<br>
Name : {{$data['name']}}
<br>
Email : {{$data['email']}}
<br>
## Body
{{$data['messages']}}
@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
