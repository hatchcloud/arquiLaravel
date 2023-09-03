<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'idProduct' => 'required|integer',
            'date' => 'required|date',
            'hour' => 'required|integer',
            'message',
        ];
    }

    public function message(): array
    {
        return [
            'hour.required' => 'Por favor eliga una hora para continuar',
            'idProduct.required'=>'Por favor eliga un servicio para agendar la cita'
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'phone' => 'teléfono',
            'date' => 'fecha',
        ];
    }

}
