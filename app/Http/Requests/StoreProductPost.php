<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'name' => 'required|unique:products|max:50',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'description' => 'required|max:500',
            'image' => 'required|max:191'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'name.unique' => 'Tên đã tồn tại.',
            'name.max' => 'Vượt quá độ dài ký tự cho phép.',
            'price.required' => 'Vui lòng nhập giá tiền.',
            'price.numeric' => 'Vui lòng nhập số.',
            'discount.required' => 'Vui lòng nhập giảm giá.',
            'discount.numeric' => 'Please enter the number.',
            'description.required' => 'Vui lòng nhập mô tả.',
            'description.max' => 'Vượt quá độ dài ký tự cho phép.',
            'image.required' => 'Vui lòng nhập url.',
            'image.max' => 'Vượt quá độ dài ký tự cho phép.',

        ];
    }
}
