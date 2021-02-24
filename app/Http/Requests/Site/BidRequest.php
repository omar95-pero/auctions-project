<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class BidRequest extends FormRequest
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
            'bid_price' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'required' => 'this feild is required'
        ];
    }
}
