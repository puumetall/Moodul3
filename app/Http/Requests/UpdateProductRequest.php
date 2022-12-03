<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'company' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'image' => ['image'],
            'type' => ['required', Rule::in(['CPU', 'Motherboard', 'HDD', 'SSD', 'Graphic Cards', 'Power Supplies'])],
            'product_code' => ['required'],
        ];
    }
}
