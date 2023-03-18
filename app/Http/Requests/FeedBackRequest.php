<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedBackRequest extends FormRequest
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
            'message' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.ends_with' => 'email is missing domain ".com"',
        ];
    }
}
