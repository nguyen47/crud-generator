<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 50;
        for ($i=0; $i < $limit; $i++) 
        { 
            \App\User::create([
                'name' => $faker->name($gender = null|'male'|'female'),
                'email' => $faker->freeEmail,
                'password' => bcrypt('secret'),
                'remember_token' => bcrypt($faker->text($maxNbChars = 200)),
                'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'updated_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
            ]);
        }
    }
}
