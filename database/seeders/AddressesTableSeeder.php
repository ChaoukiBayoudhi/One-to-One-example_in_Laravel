<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $faker;

    public function run()
    {
        $this->faker=Faker::create();
        DB::table('addresses')->insert([
            'house_number'=>$this->faker->numerify('##'),
            'street'=>Str::random(50),
            'province'=>Str::random(20),
            'postal_code'=>$this->faker->numerify('####'),
            'user_id'=>1
        ]);
    }
}
