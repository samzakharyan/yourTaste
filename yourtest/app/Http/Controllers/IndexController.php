<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Logo;
use App\About;
use App\Team;
use App\Menu;
use App\Testimonials;
use App\Footer;
use App\Slid;
use App\User;
class IndexController extends Controller {
    public function pageEdit() {
        $logo=Logo::first();
        $about=About::first();
        $team=Team::first();
        $menu=Menu::first();
        $test=Testimonials::first();
        $footer=Footer::first();
        $slid=Slid::first();
        return view('admin.pages-edit.page-edit')->with('logo', $logo)->with('about', $about)->with('team', $team)
        ->with('menu', $menu)->with('test', $test)->with('footer', $footer)->with('slid', $slid); 

    }  

    public function index() {
        $logo=Logo::first();
        $about=About::first();
        $team=Team::first();
        $menu=Menu::first();
        $test=Testimonials::first();
        $footer=Footer::first();
        $slid=Slid::first();
             if (!empty($logo) && !empty($about) ) {
             return view('user.index')->with('logo', $logo)->with('about', $about)->with('team', $team)
             ->with('menu', $menu)->with('test', $test)->with('footer', $footer)->with('slid', $slid); 
             }

             $logo['name']                = 'Laravel-Cloud';
             $logo['name']                = 'Laravel-Cloud';
             $logo['column']              = 'Laravel-Cloud';
             $logo['favicon']             = 'logo.png';
             $logo['menu_1']              = 'Laravel';
             $logo['menu_2']              = 'Laravel';
             $logo['menu_3']              = 'Laravel';
             $logo['menu_4']              = 'Laravel';
             $logo['menu_5']              = 'Laravel';
             $about['title_about']        = 'Laravel';
             $about['subtitle_about']     = 'Laravel';
             $about['description_about']  = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                 The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                 interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
                 are also reproduced in their exact original form, accompanied by English versions from
                 the 1914 translation by H. Rackham.';
             $about['image_about']        = 'logo.png';
             $team['title_team']          = 'Laravel-Cloud'; 
             $team['subtitle_team']       = 'Laravel-Cloud'; 
             $team['image_team1']         = 'logo.png'; 
             $team['text_team1']          = 'Laravel-Cloud'; 
             $team['icon_1_1']            = 'logo.png';
             $team['url_1_1']             = 'https://laravel-cloud.com';
             $team['icon_1_2']            = 'logo.png';
             $team['url_1_2']             = 'https://laravel-cloud.com'; 
             $team['name_team1']          = 'Laravel-Cloud'; 
             $team['position_1']          = 'Laravel-Cloud'; 
             $team['image_team2']         = 'logo.png'; 
             $team['text_team2']          = 'Laravel-Cloud'; 
             $team['icon_2_1']            = 'logo.png';
             $team['url_2_1']             = 'https://laravel-cloud.com'; 
             $team['icon_2_2']            = 'logo.png';
             $team['url_2_2']             = 'https://laravel-cloud.com'; 
             $team['name_team2']          = 'Laravel-Cloud'; 
             $team['position_2']          = 'Laravel-Cloud'; 
             $team['image_team3']         = 'logo.png'; 
             $team['text_team3']          = 'Laravel-Cloud'; 
             $team['icon_3_1']            = 'logo.png';
             $team['url_3_1']             = 'https://laravel-cloud.com'; 
             $team['icon_3_2']            = 'logo.png';
             $team['url_3_2']             = 'https://laravel-cloud.com'; 
             $team['name_team3']          = 'Laravel-Cloud'; 
             $team['position_3']          = 'Laravel-Cloud';
             $menu['title_menu']          = 'Laravel-Cloud';
             $menu['subtitle_menu']       = 'Laravel-Cloud';
             $menu['image_menu1']         = 'logo.png';
             $menu['name_menu1']          = 'Laravel-Cloud';
             $menu['info_1']              = 'Laravel-Cloud';
             $menu['price_1']             = '$000';
             $menu['image_menu2']         = 'logo.png';
             $menu['name_menu2']          = 'Laravel-Cloud';
             $menu['info_2']              = 'Laravel-Cloud';
             $menu['price_2']             = '$000';
             $menu['image_menu3']         = 'logo.png';
             $menu['name_menu3']          = 'Laravel-Cloud';
             $menu['info_3']              = 'Laravel-Cloud';
             $menu['price_3']             = '$000';
             $menu['image_menu4']         = 'logo.png';
             $menu['name_menu4']          = 'Laravel-Cloud';
             $menu['info_4']              = 'Laravel-Cloud';
             $menu['price_4']             = '$000';
             $menu['image_menu5']         = 'logo.png';
             $menu['name_menu5']          = 'Laravel-Cloud';
             $menu['info_5']              = 'Laravel-Cloud';
             $menu['price_5']             = '$000';
             $menu['image_menu6']         = 'logo.png';
             $menu['name_menu6']          = 'Laravel-Cloud';
             $menu['info_6']              = 'Laravel-Cloud';
             $menu['price_6']             = '$000';
             $test['title_test' ]         = 'Laravel-Cloud';
             $test['image_test' ]         = 'logo.png';
             $test['description_1']       = 'Laravel-Cloud';
             $test['name_test1']          = 'Laravel-Cloud';
             $test['text_test1']          = 'Laravel-Cloud';
             $test['description_2']       = 'Laravel-Cloud';
             $test['name_test2']          = 'Laravel-Cloud';
             $test['text_test2']          = 'Laravel-Cloud';
             $test['description_3']       = 'Laravel-Cloud';
             $test['name_test3']          = 'Laravel-Cloud';
             $test['text_test3']          = 'Laravel-Cloud';
             $footer['find']              =  'Find Us';    
             $footer['find_text']         =  'Laravel-Cloud';
             $footer['reserv_info']       =  'Reservation';
             $footer['phone_footer']      =  '000000';
             $footer['url']               =  'https://laravel-cloud.com';
             $footer['mail']              =  'info@gmail.com';
             $footer['image_footer']      =  'logo.png';
             $footer['hours']             =  'Laravel-Cloud';
             $footer['closed_time']       =  'Monday: Closed';
             $footer['week']              =  'Tuesday to Friday';
             $footer['times']             =  '7:00 AM - 9:00 PM';
             $footer['week_1']            =  'Saturday - Sunday';
             $footer['times_1']           =  '11:00 AM - 10:00 PM';
             $footer['icon_1']            =  'logo.png';
             $footer['url_footer1']       =  'https://laravel-cloud.com';
             $footer['icon_2']            =  'logo.png';
             $footer['url_footer2']       =  'https://laravel-cloud.com';
             $footer['icon_3']            =  'logo.png';
             $footer['url_footer3']       =  'https://laravel-cloud.com';
             $footer['icon_4']            =  'logo.png';
             $footer['url_footer4']       =  'https://laravel-cloud.com';
             $footer['text']              =  'Laravel-Cloud';
             $slid['slid_1']              = 'logo.png';
             $slid['title_1']             = 'Laravel-Cloud';
             $slid['text_1']              = 'Laravel-Cloud';
             $slid['url_1']               = '#team';
             $slid['button_1']            = 'Laravel-Cloud';
             $slid['slid_2']              = 'logo.png';
             $slid['title_2']             = 'Laravel-Cloud';
             $slid['text_2']              = 'Laravel-Cloud';
             $slid['url_2']               = '#menu';
             $slid['button_2']            = 'Laravel-Cloud';
             $slid['slid_3']              = 'logo.png';
             $slid['title_3']             = 'Laravel-Cloud';
             $slid['text_3']              = 'Laravel-Cloud';
             $slid['url_3']               = '#contact'; 
             $slid['button_3']            = 'Laravel-Cloud';
             return view('user.index')->with('logo', $logo)->with('about', $about)->with('team', $team)
             ->with('menu', $menu)->with('test', $test)->with('footer', $footer)->with('slid', $slid);

    }  
}
