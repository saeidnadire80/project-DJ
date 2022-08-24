<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_product'=>'required',
            'price'=>'required|integer',
            'discount_price'=>'required|integer',
            'image'=>'required|mimes:png,jpg,jpeg|max:10000000'
        ];
    }
}
