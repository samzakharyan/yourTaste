<?php

use Illuminate\Database\Seeder;
use App\Logo;
class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       //DB::table('logo')->delete();
               DB::table('logo')->insert([
                 'name'       =>  'Laravel-Cloud',
                 'column'     =>  'Laravel-Cloud',
                 'favicon'    =>  'logo.png',
                 'menu_1'     =>  'Home',
                 'menu_2'     =>  'About',
                 'menu_3'     =>  'Team',
                 'menu_4'     =>  'Menu',
                 'menu_5'     =>  'Contact',
               ]);

    }
}
