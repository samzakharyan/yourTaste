<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
                'title_menu'    =>  'required|min:2|max:50', 
                'subtitle_menu' =>  'required|min:2|max:50',
                'image_menu1'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',   
                'name_menu1'    =>  'required|min:2|max:50',  
                'info_1'        =>  'required|min:2|max:50',  
                'price_1'       =>  'required|min:2|max:50', 
                'name_menu2'    =>  'required|min:2|max:50',
                'image_menu2'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',  
                'info_2'        =>  'required|min:2|max:50', 
                'price_2'       =>  'required|min:2|max:50', 
                'image_menu3'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',   
                'name_menu3'    =>  'required|min:2|max:50', 
                'info_3'        =>  'required|min:2|max:50', 
                'price_3'       =>  'required|min:2|max:50',                 
                'image_menu4'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',   
                'name_menu4'    =>  'required|min:2|max:50',
                'info_4'        =>  'required|min:2|max:50',
                'price_4'       =>  'required|min:2|max:50',
                'image_menu5'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',   
                'name_menu5'    =>  'required|min:2|max:50', 
                'info_5'        =>  'required|min:2|max:50', 
                'price_5'       =>  'required|min:2|max:50',
                'image_menu6'   =>  'image|mimes:jpeg,png,jpg,gif|max:2048',  
                'name_menu6'    =>  'required|min:2|max:50',
                'info_6'        =>  'required|min:2|max:50',
                'price_6'       =>  'required|min:2|max:50',
        ];
    }
}
