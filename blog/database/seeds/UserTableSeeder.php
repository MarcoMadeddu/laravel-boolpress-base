<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = 3;

        for ($i=0; $i < $users ; $i++) { 
            
            $newUser = new User();

            $newUser->name = $faker->name;
            $newUser->email = $faker->email;
            $newUser->password = $faker->password;

            $newUser->save();
        }
    }
}
