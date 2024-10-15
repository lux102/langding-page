<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'name' => 'string|required|min:1|max:255',
            'area' => 'string|required|min:1|max:500',
            "completed_at" => "string|nullable|date|date_format:Y-m-d",
            'description' => 'string|required|min:1|max:500',
            'category_id' => "integer|required|exists:project_categories,id",
            "files" => "required|array",
            "files.*" => "required|image|mimes:jpeg,png,jpg,webp",
        ];
    }
}
