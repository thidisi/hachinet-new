<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'thumbnail' => 'required|mimes:jpeg,png,jpg,gif,webp|max:512',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tên bài viết không được để trống!',
            'thumbnail.required' => 'Ảnh không được để trống!',
            "thumbnail.mimes" => "file phải đúng định dạng image!",
            "thumbnail.max" => "Kích thước ảnh không được lớn hơn 500KB!",
            'description.required' => 'Mô tả không được để trống!',
            'content.required' => 'Nội dung không được để trống!',
            'category_id.required' => 'Danh mục không được để trống!',
        ];
    }
}
