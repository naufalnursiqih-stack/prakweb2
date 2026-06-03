<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories,name',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Nama kategori sudah ada.',
        ];
    }
}
