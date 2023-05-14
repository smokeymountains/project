<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauseFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'catID' => [
                'required',
                'integer'
            ],
            'title' => [
                'required',
                'string'
            ],

            'slug' => [
                'required',
                'string'
            ],
            'metaDescr' => [
                'required',
                'string'
            ],
            'descr' => [
                'required',
                'string'
            ],

            'causeGoal' => [
                'required',
                'integer'
            ],
            'availableAmount'=>[
                'integer'
            ]
        ];
    }
}
