<?php

use Illuminate\Database\Seeder;
use App\Footer;
class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        DB::table('footer')->insert([
            'find'         =>  'Find Us',    
            'find_text'    =>  'Laravel-Cloud',
            'reserv_info'  =>  'Reservation',
            'phone_footer' =>  '000000',
            'url'          =>  'https://laravel-cloud.com',
            'mail'         =>  'info@gmail.com',
            'image_footer' =>  'logo.png',
            'hours'        =>  'Laravel-Cloud',
            'closed_time'  =>  'Monday: Closed',
            'week'         =>  'Tuesday to Friday',
            'times'        =>  '7:00 AM - 9:00 PM',
            'week_1'       =>  'Saturday - Sunday',
            'times_1'      =>  '11:00 AM - 10:00 PM',
            'icon_1'       =>  'logo.png',
            'url_footer1'  =>  'https://laravel-cloud.com',
            'icon_2'       =>  'logo.png',
            'url_footer2'  =>  'https://laravel-cloud.com',
            'icon_3'       =>  'logo.png',
            'url_footer3'  =>  'https://laravel-cloud.com',
            'icon_4'       =>  'logo.png',
            'url_footer4'  =>  'https://laravel-cloud.com',
            'text'         =>  'Laravel-Cloud',
          ]);
    }
}
