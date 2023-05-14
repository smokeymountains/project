<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PdfsFormrequest extends FormRequest
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
            'title' => [
                'string',
                'required'
            ],
            'date' => [
                'string',
                'required'
            ],
            'descr' => [
                'string',
                'required'
            ],

            'ApId' => [
                'integer',
                'required'
            ]

        ];
    }
}
