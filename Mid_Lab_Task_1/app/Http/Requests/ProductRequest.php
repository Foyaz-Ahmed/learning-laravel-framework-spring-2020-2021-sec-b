<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'customer_name' => 'required|alpha_spaces|main:3|max:30',
            'address' => 'required|min:3|max:50|regex:[a-zA-Z0-9_\-]',
            'phone' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required|min:1',
            'quantity' => 'required|min:1|max:20',
            'total_price' => 'required|min:1',
            'phone' => 'required|digits:11|max:15',


        ];
    }
}
