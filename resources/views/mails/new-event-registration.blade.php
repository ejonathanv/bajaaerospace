<x-mail::message>
# Nuevo registro de evento

Se ha registrado un nuevo usuario en el evento {{ $event->title }}.

## Detalles del registro
- **Nombre:** {{ $request->name }}
- **Email:** {{ $request->email }}
- **Teléfono:** {{ $request->phone }}
- **Compañía:** {{ $request->company }}
- **Puesto:** {{ $request->job_title }}

Saludos,<br>
{{ config('app.name') }}
</x-mail::message>
