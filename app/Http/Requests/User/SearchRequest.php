<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class SearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validation = [
            'doesntHave' => 'sometimes|required|array',
            'first' => 'sometimes|required|bool',
            'has' => 'sometimes|required|array',
            'onlyTrashed' => 'sometimes|required|bool',
            'page' => 'sometimes|required|numeric',
            'perPage' => 'sometimes|required|numeric',
            'with' => 'sometimes|required|array',
            'withCount' => 'sometimes|required|array',
            'withTrashed' => 'sometimes|required|bool',
        ];

        if (request()->isMethod('post')) {
            Arr::set($validation, 'where', 'sometimes|required|array');
        }

        return $validation;
    }
}
