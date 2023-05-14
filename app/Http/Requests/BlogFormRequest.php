<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
            'author' => [
                'required',
                'string'
            ],
            'meta' => [
                'required',
                'string'
            ],
            'date' => [
                'required',
                'string'
            ],
            'time' => [
                'required',
                'string'
            ],
            'descr' => [
                'required',
                'string'
            ],
            'key' => [
                'nullable',
                'string'
            ],
            'pstr' => [
                'nullable',
                'string'
            ],
            'status' => [
                'nullable'
            ],
        ];
    }
}
