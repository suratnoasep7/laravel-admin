<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCriteriaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criteria_edit');
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
