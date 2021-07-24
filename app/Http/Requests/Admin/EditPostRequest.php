<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
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
            'title'     => 'required',
            'image'     => 'nullable|image|dimensions:max_width=100,max_height=200',
            'post'      => 'required',
            'category'  => 'required|integer|exists:categories,id',
            'tags'      => 'required'
        ];
    }
}
