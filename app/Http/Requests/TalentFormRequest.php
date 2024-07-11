<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalentFormRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'university' => 'required|string|max:255',
            'career' => 'required|string|max:255',
            'academic_level' => 'required|string|max:255',
            'relevant_projects' => 'required|string|max:255',
            'attach_resume' => 'required|file|max:5000'
        ];
    }
}
