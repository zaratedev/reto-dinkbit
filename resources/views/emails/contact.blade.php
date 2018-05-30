@component('mail::message')
# Nuevo mensaje de contacto

{{ $data->name }}, te escribio un mensaje.

- Nombre completo: {{ $data->name.' '. $data->lastName }}
- Teléfono de casa o celular: {{ $data->cellPhone }}
- Correo electrónico: {{ $data->email }}
- Asunto: {{ $data->affair }}
- Empresa: {{ $data->company }}
- Teléfono Oficina: {{ $data->officePhone }}
- Mensaje: {{ $data->message }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
