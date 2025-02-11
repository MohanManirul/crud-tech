<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCrudRequest extends FormRequest
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
            "title" => "required|unique,posts".$this->id,
            "image" => "required|image|mimes:jpeg,jpg,png,gif,svg|max:2048",
        ];
    }
}
