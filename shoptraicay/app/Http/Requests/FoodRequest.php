<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cho phép request này chạy
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ];
    }
    
}
