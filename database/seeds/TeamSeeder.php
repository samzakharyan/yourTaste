<?php

use Illuminate\Database\Seeder;
use App\Team;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('team')->insert([
               'title_team'     => 'Laravel-Cloud',
               'subtitle_team' 	=> 'Laravel-Cloud',
               'image_team1'	  => 'logo.png',
               'text_team1'     => 'Laravel-Cloud',
               'icon_1_1'       => 'logo.png',
               'url_1_1' 	      => 'https://laravel-cloud.com',
               'icon_1_2'       => 'logo.png',
               'url_1_2'        => 'https://laravel-cloud.com',
               'name_team1' 	  => 'Laravel-Cloud',
               'position_1'     => 'Laravel-Cloud',
               'image_team2'	  => 'logo.png',
               'text_team2'     => 'Laravel-Cloud',
               'icon_2_1'       => 'logo.png',
               'url_2_1' 	      => 'https://laravel-cloud.com',
               'icon_2_2'       => 'logo.png',
               'url_2_2'        => 'https://laravel-cloud.com',
               'name_team2' 	  => 'Laravel-Cloud',
               'position_2'     => 'Laravel-Cloud',
               'image_team3'	  => 'logo.png',
               'text_team3'     => 'Laravel-Cloud',
               'icon_3_1'       => 'logo.png',
               'url_3_1' 	      => 'https://laravel-cloud.com',
               'icon_3_2'       => 'logo.png',
               'url_3_2'        => 'https://laravel-cloud.com',
               'name_team3' 	  => 'Laravel-Cloud',
               'position_3'     => 'Laravel-Cloud',
               ]);
    }
}
