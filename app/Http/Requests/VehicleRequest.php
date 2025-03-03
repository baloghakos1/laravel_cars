<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
        if ($this->method() === 'PATCH') {
            return ['vin' => 'nullable|min:17|max:17'];
        }
        return [
            'vin' => 'required|min:17|max:17',
        ];
    }

    public function messages(): array
    {
        return [
            'vin.required' => 'Kötelező mező!',
            'vin.min' => 'Legalább 17 karakter legyen!',
            'vin.max' => 'Legfeljebb 17 karakter legyen!',
        ];
    }
}