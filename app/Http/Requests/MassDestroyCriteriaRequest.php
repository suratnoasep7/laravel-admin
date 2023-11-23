<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCriteriaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criteria_delete');
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:criteria,id',
        ];
    }
}
