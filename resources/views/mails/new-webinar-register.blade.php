<x-mail::message>
# New Registration To Webinar

{{ $register->first_name }} {{ $register->last_name }} has registered to our next webinar.

Here is the details of the registration: <br>
Name: {{ $register->first_name }} {{ $register->last_name }} <br>
Email: {{ $register->email }} <br>
Phone: {{ $register->phone }} <br>
Company: {{ $register->company }} <br>
Job Title: {{ $register->job_title }} <br>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
