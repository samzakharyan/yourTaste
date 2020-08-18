<?php

use Illuminate\Database\Seeder;
use App\Testimonials;
class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
           'title_test'        => 'Laravel-Cloud',
           'image_test'        => 'logo.png',
           'description_1'     => 'Laravel-Cloud',
           'name_test1'        => 'Laravel-Cloud',
           'text_test1'        => 'Laravel-Cloud',
           'description_2'     => 'Laravel-Cloud',
           'name_test2'        => 'Laravel-Cloud',
           'text_test2'        => 'Laravel-Cloud',
           'description_3'     => 'Laravel-Cloud',
           'name_test3'        => 'Laravel-Cloud',
           'text_test3'        => 'Laravel-Cloud',

        ]);
    }
}
