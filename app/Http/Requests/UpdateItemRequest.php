<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'name'        => 'sometimes|required|string|max:255',
            'quantity'    => 'sometimes|required|integer|min:0',
            'price'       => 'sometimes|required|numeric|min:0',
            'category_id' => 'sometimes|required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Field ini diperlukan saat diubah.',
            'quantity.required'    => 'Field ini diperlukan saat diubah.',
            'price.required'       => 'Field ini diperlukan saat diubah.',
            'category_id.required' => 'Field ini diperlukan saat diubah.',
        ];
    }
}
