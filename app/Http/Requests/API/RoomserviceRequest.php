<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class RoomserviceRequest extends FormRequest
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
            'room_no'=>'required|max:10',
            'size'=>'required|max:5',
            'price'=>'required|min:3|max:10',
        ];
    }
}
