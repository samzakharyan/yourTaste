<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
           'title_menu'   =>'Laravel-Cloud',               
           'subtitle_menu'=>'Laravel-Cloud',   
           'image_menu1'  =>'logo.png',   
           'name_menu1'   =>'Laravel-Cloud',   
           'info_1'       =>'Laravel-Cloud',   
           'price_1'      =>'$000',   
           'image_menu2'  =>'logo.png',   
           'name_menu2'   =>'Laravel-Cloud',   
           'info_2'       =>'Laravel-Cloud',   
           'price_2'      =>'$000',  
           'image_menu3'  =>'logo.png',   
           'name_menu3'   =>'Laravel-Cloud',   
           'info_3'       =>'Laravel-Cloud',   
           'price_3'      =>'$000',  
           'image_menu4'  =>'logo.png',   
           'name_menu4'   =>'Laravel-Cloud',   
           'info_4'       =>'Laravel-Cloud',   
           'price_4'      =>'$000',  
           'image_menu5'  =>'logo.png',   
           'name_menu5'   =>'Laravel-Cloud',   
           'info_5'       =>'Laravel-Cloud',   
           'price_5'      =>'$000',  
           'image_menu6'  =>'logo.png',   
           'name_menu6'   =>'Laravel-Cloud',   
           'info_6'       =>'Laravel-Cloud',   
           'price_6'      =>'$000',  
        	]);
    }
}
