<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoPostRequest extends FormRequest
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

        $video = request('video');

        return [
            'title' => 'required|string|max:255|unique:video_posts,title,' . $video->id,
            'description' => 'required|string',
            'youtube_video_id' => 'nullable|string|max:255',
            'source' => 'required|string|in:YouTube,Other',
            'cover' => 'nullable|image|max:2048',
            'embed_code' => 'nullable|string',
            'published_at' => 'required|date',
        ];
    }
}
