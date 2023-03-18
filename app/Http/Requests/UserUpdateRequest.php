<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'email' => 'required|email',
            'avatar' => 'mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'email.required' => 'Tên không được để trống!',
            'email.email' => 'Email phải đúng định dạng!',
            'avatar.mimes' => 'Ảnh phải đúng định dạng (jpeg,png,jpg,gif)!',
            'avatar.max' => 'Ảnh dung lượng tối đa 2MB!',
        ];
    }
}
