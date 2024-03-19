<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class carRequest extends FormRequest
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
            'type' => 'required|string|max:255',
            'nameCar' => 'required|string|max:255',
            'brand_id' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming image upload
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:500',

        ];
    }
}
