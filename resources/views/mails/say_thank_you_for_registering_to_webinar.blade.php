<x-mail::message>
# Thank You For Registering To Webinar

Hello {{ $register->first_name }} {{ $register->last_name }}, we are happy to know that you are interested in our webinar. <br>

"{{ $webinar->title }}" <br>

<x-mail::button :url="$webinar->link">
Join Webinar
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
