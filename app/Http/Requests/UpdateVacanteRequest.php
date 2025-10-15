<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVacanteRequest extends FormRequest
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
            'titulo' => 'required|string|max:255',
            'empresa' => 'nullable|string|max:255',
            'ubicacion' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:100',
            'sueldo' => 'nullable|numeric',
            'contacto' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
            'flyer' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'activa' => 'boolean',
        ];
    }
}
