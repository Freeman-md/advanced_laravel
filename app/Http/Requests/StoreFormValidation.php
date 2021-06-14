<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
        // Using Recaptcha
        return [
            'name' => 'required|max:20',
            'email' => 'required|max:25',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'name.max' => 'Name should not be more than 20 characters',
            'email.max' => 'Email should not be more than 25 characters'
        ];
    }
}
