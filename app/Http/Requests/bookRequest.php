<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'pick_up_date' => 'required|date',
            'return_date' => 'required|date',
            'pick_up_and_return_location' => 'required|string|max:255',

        ];
    }
}
