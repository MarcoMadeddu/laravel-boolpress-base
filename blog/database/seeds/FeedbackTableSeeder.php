<?php

use Illuminate\Database\Seeder;
use App\Feedback;
use App\User;
use Faker\Generator as Faker;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $feedback = 10;
        $users = User::all();

        for ($i=0; $i < $feedback; $i++) { 
            $newfeedback = new Feedback();

            $newfeedback->user_id = $users->random()->id;
            $newfeedback->title = $faker->city();
            $newfeedback->description = $faker->text(100);

            $newfeedback->save();
        }
    }
}
