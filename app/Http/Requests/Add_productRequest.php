<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Add_productRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_product'=>'required',
            'price'=>'required|integer',
            'discount_price'=>'required|integer',
            'description'=>'required',
            'color'=>'required',
            'weight'=>'required',
            'description'=>'required',
            'plan'=>'required'
        ];
    }
}
