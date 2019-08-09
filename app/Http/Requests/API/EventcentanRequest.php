<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class EventcentanRequest extends FormRequest
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
            'hall_no'=>'required|min:1|max:10|unique:eventcentan',
            'size'=>'required|min:3',
            'price'=>'required|min:3|max:10'
        ];
    }
}
