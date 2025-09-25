<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'store_id' => 'required|exists:stores,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            '*.required' => 'The :attribute field is required.',
            '*.exists' => 'The selected :attribute is invalid.',
            'price.numeric' => 'The :attribute must be a number.',
            'price.min' => 'The :attribute must be at least :min.',
            'stock.integer' => 'The :attribute must be an integer.',
            'stock.min' => 'The :attribute must be at least :min.',
            'images.*.image' => 'The :attribute must be an image.',
            'images.*.mimes' => 'The :attribute must be a file of type: :values.',
            'images.*.max' => 'The :attribute may not be greater than :max kilobytes.',
        ];
    }
}
