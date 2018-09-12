<?php

namespace celiacomendoza\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailResponseCommerceRequest extends FormRequest
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
            'messageCustomer' => 'required | min:10',
        ];
    }
}
