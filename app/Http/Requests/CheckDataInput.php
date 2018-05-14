<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckDataInput extends FormRequest
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
            'userid' => 'required|max:10',
            'shortname' => 'required|max:255',
            'kataname' => 'max:255',
            'fullname' => 'max:255',
            'birthday' => 'required|date',
            'address' => 'max:255',
            'password' => 'required|min:6|max:32',
            'fileimg' => 'file|image',
        ];
    }

    public function messages()
    {
        return [
            'userid.required' => 'The User Id is required.',
            // 'userid.unique' => 'The User Id is unique.',
            'userid.max' => 'The User Id is max = 10.',

            'shortname.required' => 'The Short Name Id is required.',
            'shortname.max' => 'The Short Name is max = 255.',

            'kataname.alpha' => 'The Kataname is alpha.',
            'kataname.max' => 'The Short Name is max = 255.',

            'fullname.alpha' => 'The Full Name is alpha.',
            'fullname.max' => 'The Full Name is max = 255.',

            'birthday.required' => 'The Birth Day is required.',
            'birthday.date' => 'The Birth Day is date.',
            // 'birthday.befor' => 'The Birth Day is after today.',

            'address.alpha_dash' => 'The Kataname is alpha dash.',
            'address.max' => 'The Short Name is max = 255.',

            'password.required' => 'The PassWord is required.',
            'password.min' => 'The PassWord is min =6.',
            'password.max' => 'The PassWord is max = 32.',

            'fileimg.file' => 'The Image is file.',
            'fileimg.image' => 'The Image is Image.',
        ];
    }
}
