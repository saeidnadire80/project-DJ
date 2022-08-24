<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Edit_imageRequest extends FormRequest
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
            'image_1'=>'required|max:1000000,|mimes:jpg,png,jpeg,gif|dimensions:width=500,height=500'
        ];
    }
}
