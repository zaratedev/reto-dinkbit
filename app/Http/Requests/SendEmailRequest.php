<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|max:45|regex:/^[\pL\s\-]+$/u',
          'lastName' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
          'cellPhone' => 'required|digits:10',
          'email' => 'required|email',
          'company' => 'required|max:100|alpha_dash',
          'officePhone' => 'required|digits_between:5,10',
          'message' => 'required|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
      return [
        'name.required'               => 'El campo Nombre es obligatorio.',
        'name.max'                    => 'El campo Nombre no debe contener más de :max caracteres.',
        'name.regex'                  => 'El formato del campo Nombre es inválido.',
        'lastName.required'           => 'El campo Apellidos es obligatorio.',
        'lastName.max'                => 'El campo Apellidos no debe contener más de :max caracteres.',
        'lastName.regex'              => 'El formato del campo Apellidos es inválido.',
        'cellPhone.required'          => 'El campo Teléfono de casa o celular es obligatorio.',
        'cellPhone.digits'            => 'El campo Teléfono de casa o celular debe ser un número de :digits dígitos.',
        'email.required'              => 'El campo Correo electrónico es obligatorio.',
        'email.email'                 => 'El campo Correo electrónico debe ser una dirección de correo válida.',
        'company.required'            => 'El campo Empresa es obligatorio.',
        'company.max'                 => 'El campo Empresa no debe contener más de :max caracteres.',
        'company.alpha_dash'          => 'El campo Empresa sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
        'officePhone.required'        => 'El campo Teléfono Oficina es obligatorio.',
        'officePhone.digits_between'  => 'El campo Teléfono Oficina debe contener entre :min y :max dígitos.',
        'message.required'            => 'El campo Mensaje es obligatorio.',
        'message.max'                 => 'El campo Mensaje no debe contener más de :max caracteres.',
      ];
    }
}
