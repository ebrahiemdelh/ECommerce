<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'vendor_id' => 'required|exists:vendors,id',
            'address' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
        ];
    }
    public function messages(): array
    {
        return [
            '*.required' => 'The :attribute field is required.',
            '*.string' => 'The :attribute must be a string.',
            '*.max' => 'The :attribute may not be greater than :max characters.',
            'vendor_id.exists' => 'The selected vendor does not exist.',
        ];
    }
}
