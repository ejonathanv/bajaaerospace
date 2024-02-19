<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|string|unique:articles,title',
            'description' => 'nullable|string',
            'magazineThumb' => 'required|image',
            'magazineFile' => 'required_without:magazineUrl|file|mimes:pdf',
            'magazineUrl' => 'sometimes|required|url',
        ];
    }
}
