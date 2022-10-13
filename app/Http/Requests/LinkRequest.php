<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
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
        return [
            'unique_id' => 'required|string|alpha_num|unique:links,unique_id',
            'long_url' => 'required|string'
        ];
    }

    /**
     * Get custom validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'unique_id.required' => 'A unique_id is required',
            'unique_id.unique' => 'A unique_id already exists',
            'unique_id.alpha_num' => 'A unique_id may only contain letters and numbers',
            'long_url.required' => 'A long_url is required'
        ];
    }
}
