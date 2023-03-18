<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|ends_with:.com',
            'phone' => 'required|numeric|digits_between:10,11',
            'message' => 'required|min:6',
            'subject' => 'required|min:6',
            'g-recaptcha-response' => ['required', new \App\Rules\ValidRecaptcha]
        ];
    }
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'Recaptcha field is required.',
            'email.ends_with' => 'email is missing domain ".com"',
        ];
    }
}
