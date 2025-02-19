<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsRequest extends FormRequest
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
            'name'              => 'nullable|string|max:50',
            'title'             => 'nullable|string|max:255',
            'sub_title'         => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'sub_description'   => 'nullable|string',
            'bg'                => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'btn_text'          => 'nullable|string|max:50',
            'btn_link'          => 'nullable|string|max:100',
            'btn_color'         => 'nullable|string|max:50',
            'rating'            => 'nullable|integer|between:1,5'
        ];
    }
}

