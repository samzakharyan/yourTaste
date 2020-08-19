<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
                'find'         => 'required|min:2|max:20',
                'find_text'    => 'required|min:2|max:100',
                'reserv_info'  => 'required|min:2|max:50',
                'phone_footer' => 'required|min:2|max:50',
                'url'          => 'required|min:2|max:50',
                'mail'         => 'required|email',
                'image_footer' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'hours'        => 'required|min:2|max:50',
                'closed_time'  => 'required|min:2|max:50',
                'week'         => 'required|min:2|max:50',
                'times'        => 'required|min:2|max:50',
                'week_1'       => 'required|min:2|max:50',
                'times_1'      => 'required|min:2|max:50',
                'icon_1'       => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_footer1'  => 'required|min:2|max:50',
                'icon_2'       => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_footer2'  => 'required|min:2|max:50',
                'icon_3'       => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_footer3'  => 'required|min:2|max:50',
                'icon_4'       => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'url_footer4'  => 'required|min:2|max:50',
                'text'         => 'required|min:2|max:50',
        ];
    }
}
