<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RescatadoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre" => 'required',
            "foto" => 'required',
            "edad" => 'required',
            "sexo" => 'required',
            "procedencia" => 'required',
            "valoracion_medica" => 'required',
            "medico_id",
            "rescate_id"
        ];
    }
}
