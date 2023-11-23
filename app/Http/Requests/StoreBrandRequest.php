<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('brand_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:brand'
            ]
        ];
    }
}
