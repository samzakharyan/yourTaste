<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialsRequest extends FormRequest
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
                'title_test'     => 'required|min:2|max:50', 
                'image_test'     => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'description_1'  => 'required|min:2|max:50',
                'name_test1'     => 'required|min:2|max:250',
                'text_test1'     => 'required|min:2|max:50',
                'description_2'  => 'required|min:2|max:50',
                'name_test2'     => 'required|min:2|max:250',
                'text_test2'     => 'required|min:2|max:50',
                'description_3'  => 'required|min:2|max:50',
                'name_test3'     => 'required|min:2|max:250',
                'text_test3'     => 'required|min:2|max:50',
        ];
    }
}
