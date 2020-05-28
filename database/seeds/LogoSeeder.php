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
                 'type'=>'text',
                 'show'=>'1',
                 'name'=>'Your Taste',
                 'call_name'=>'Call Me',
                 'phone'=>'125478',
                 'reserv_name'=>'Name',
                 'column'=>'Laravel-Cloud',
                 'favicon'=>'logo.png',
               ]);

    }
}
