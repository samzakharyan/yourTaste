<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
                'title_team'   => 'required|min:2|max:50', 
                'subtitle_team'=> 'required|min:2|max:50',
                'image_team1'  => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'text_team1'   => 'required|min:2|max:50',
                'icon_1_1'     => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'url_1_1'      => 'required|min:2|max:250',
                'icon_1_2'     => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'url_1_2'      => 'required|min:2|max:250', 
                'name_team1'   => 'required|min:2|max:50', 
                'position_1'   => 'required|min:2|max:50',
                'image_team2'  => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'text_team2'   => 'required|min:2|max:50', 
                'icon_2_1'     => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_2_1'      => 'required|min:2|max:250', 
                'icon_2_2'     => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_2_2'      => 'required|min:2|max:250', 
                'name_team2'   => 'required|min:2|max:50', 
                'position_2'   => 'required|min:2|max:50',
                'image_team3'  => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'text_team3'   => 'required|min:2|max:50',
                'icon_3_1'     => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'url_3_1'      => 'required|min:2|max:250',
                'icon_3_2'     => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'url_3_2'      => 'required|min:2|max:250', 
                'name_team3'   => 'required|min:2|max:50', 
                'position_3'   => 'required|min:2|max:50',
        ];
    }
}
