<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(LogoSeeder::class);
         $this->call(AboutSeeder::class);
         $this->call(TeamSeeder::class);
         $this->call(MenuSeeder::class);
         $this->call(TestimonialsSeeder::class);
         $this->call(FooterSeeder::class);
         $this->call(SlidSeeder::class);
    }   
}
