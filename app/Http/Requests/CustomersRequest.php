<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CustomersRequest extends FormRequest
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

            'country_id' => 'nullable|exists:countries,id',
            'state' => 'nullable|in:valid,not_valid',

        ];
    }
}
