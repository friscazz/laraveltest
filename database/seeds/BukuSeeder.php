<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

      for($i=1; $i<5; $i++){
            DB::table('buku')->insert([
                'penulis' => $faker->name,
                'judul' => $faker->text,
                'id_genre' => rand(1, 3)
            ]);
      }
    }
}
