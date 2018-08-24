<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryPost extends FormRequest
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
            'name' => 'required|unique:categories|max:50',
            'description' => 'required|max:500',
            'image' => 'required|max:191'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter a name.',
            'name.unique' => 'The name already exists.',
            'name.max' => 'Pass character length for.',
            'description.required' => 'Please enter a description.',
            'description.max' => 'Pass character length for',
            'image.required' => 'Please enter a url.',
            'image.max' => 'Pass character length for.'

        ];
    }
}
