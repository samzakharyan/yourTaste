<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidRequest extends FormRequest
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
                'slid_1'     =>'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title_1'    =>'required|min:2|max:50',
                'text_1'     =>'required|min:2|max:50',
                'url_1'      =>'required|min:2|max:50',
                'button_1'   =>'required|min:2|max:50',
                'slid_2'     =>'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title_2'    =>'required|min:2|max:50',
                'text_2'     =>'required|min:2|max:50',
                'url_2'      =>'required|min:2|max:50',
                'button_2'   =>'required|min:2|max:50',
                'slid_3'     =>'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title_3'    =>'required|min:2|max:50',
                'text_3'     =>'required|min:2|max:50',
                'url_3'      =>'required|min:2|max:50',
                'button_3'   =>'required|min:2|max:50',
        ];
    }
}
