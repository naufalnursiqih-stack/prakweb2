<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $inputs = $this->all();

        foreach ($inputs as $key => $value) {
            if (is_string($value)) {
                $inputs[$key] = strip_tags(trim($value));
            }
        }

        $this->merge($inputs);
    }

    public function rules()
    {
        return [
            'name' => 'sometimes|required|string|unique:categories,name,' . $this->route('category')->id
        ];
    }
}
