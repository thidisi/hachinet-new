<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseRequest extends FormRequest
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
            'category_id' => 'required',
            'location' => 'required',
            'completed' => 'required',
            'shortdesc' => 'required',
            'client' => 'required',
            'team_size' => 'required',
            'description' => 'required',    
            'status' => 'required',
            'feature' => 'required',
            'size' => 'required',
            'contract_type' => 'required',
            'responsibilities' => 'required',
            'skill' => 'required',
            'tag' => 'required',
        ];
    }
}
