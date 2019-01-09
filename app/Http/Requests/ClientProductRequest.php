<?php

namespace celiacomendoza\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientProductRequest extends FormRequest
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
            'description' => 'required | min:10',
            'price' => 'required | numeric',
            'category_id' => 'required',
            'available' => 'required',
        ];
    }
}
