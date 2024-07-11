<x-mail::message>
# Hello {{ $request->first_name }}.

We received your resume and we will review it. We will contact you soon.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
