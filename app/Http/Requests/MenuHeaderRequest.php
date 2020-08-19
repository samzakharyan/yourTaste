<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuHeaderRequest extends FormRequest
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
            'menu_1'      => 'required|min:2|max:10',
            'menu_2'      => 'required|min:2|max:10',
            'menu_3'      => 'required|min:2|max:10',
            'menu_4'      => 'required|min:2|max:10',  
            'menu_5'      => 'required|min:2|max:10', 
        ];
    }
}
