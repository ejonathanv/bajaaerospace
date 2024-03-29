<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'title' => 'required|string|max:255|unique:pages,title,' . $this->page->id,
            'subtitle' => 'nullable|string|max:255',
            'content' => 'required|string',
            'cover' => 'nullable|image|max:5000|mimes:jpg,jpeg,png',
        ];
    }
}
