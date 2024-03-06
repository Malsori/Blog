<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules= [
            'name' =>
            [
                'required',
                'string',
                'max:200'
            ],
            
            'price' =>
            [
                'required',
               
            ],
            'slug' =>
            [
                'required',
                'string',
                'max:200'
            ],
            'description' =>
            [
                'required',
                'string',
                'max:200'
            ],
            'image' =>
            [
                'nullable',
                'mimes:jpg,jpeg,png,jfif'
                
            ]
        ];

        return $rules;
    }
}
