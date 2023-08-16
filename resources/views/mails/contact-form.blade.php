<x-mail::message>
# New Message from Website

**Name:** {{ $name }}<br>
**Email:** {{ $email }}<br>
**Phone:** {{ $phone }}<br>
**Message:** {{ $message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
