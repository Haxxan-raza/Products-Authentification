<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTest extends FormRequest
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
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            
            'name.required' => 'Your name must be required for Update',
            'image.mimes' => 'Only .JPEG, .JPG and .PNG files are allowed'
        ];
    }
}
