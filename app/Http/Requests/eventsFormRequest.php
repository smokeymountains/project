<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class eventsFormRequest extends FormRequest
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
            'cId' => [
                'required',
                'integer'
            ],
            'title' => [
                'required',
                'string'
            ],
            'venue' => [
                'required',
                'string'
            ],
            'descr' => [
                'required',
                'string'
            ],
            'date' => [
                'required',
                'string'
            ],
              'end' => [
                'required',
                'string'
            ],
            'time' => [
                'required',
                'string'
            ],
            'meta' => [
                'required',
                'string'
            ],
        ];
    }
}
