<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreCriteriaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criteria_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:criteria'
            ]
        ];
    }
}
