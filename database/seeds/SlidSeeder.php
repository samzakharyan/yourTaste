<?php

use Illuminate\Database\Seeder;
use App\Slid;
class SlidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('slid')->insert([
             'slid_1'     => 'logo.png',
             'title_1'    => 'Laravel-Cloud',
             'text_1'     => 'Laravel-Cloud',
             'url_1'      => '#team',
             'button_1'   => 'Laravel-Cloud',
             'slid_2'     => 'logo.png',
             'title_2'    => 'Laravel-Cloud',
             'text_2'     => 'Laravel-Cloud',
             'url_2'      => '#menu',
             'button_2'   => 'Laravel-Cloud',
             'slid_3'     => 'logo.png',
             'title_3'    => 'Laravel-Cloud',
             'text_3'     => 'Laravel-Cloud',
             'url_3'      => '#contact', 
             'button_3'   => 'Laravel-Cloud',
          ]);
    }
}
