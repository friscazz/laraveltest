<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class genreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

       for($i=0; $i < 4; $i++){
            DB::table('genre')->insert([
                'genre' => $faker->text
            ]);
       }
    }
}
