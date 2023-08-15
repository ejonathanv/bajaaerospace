<x-mail::message>
# New Member Registration

{{ $name }} has requested to join the Baja Aerospace Group. Please review their application and approve or deny it.

@component('mail::button', ['url' => route('members.show', $id)])
    View Application
@endcomponent

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
