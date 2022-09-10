@component('mail::message')
# ¡Tienes Nuevo Lead!

@component('mail::panel')
# Informacion:

Nombre: {{ $name.' '.$last_name }}

Email: {{ $email }}

Telefono: {{ $phone }}

Inversion aproximada: {{ $amount }}

Horario de contacto: {{ $time }}

@endcomponent

@component('mail::button', ['url' => config('app.url').'/admin/leads/'.$id.'/show'])
Abrir CRM
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent
