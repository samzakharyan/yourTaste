<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title_about'        => 'required|min:2|max:50', 
            'subtitle_about'     => 'required|min:2|max:60', 
            'description_about'  => 'required|min:2|max:2000', 
            'image_about'        => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ];
    }
}
