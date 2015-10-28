<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			User::create([

			]);
		}
	}

	protected function createFakerUsers()
    {
        $faker = Faker::create();
        for($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
            $user->phone = $faker->phone;
            $user->staff_role = $faker->staff_role;
            $user->img = $faker->imageUrl($category = 'people');
            $user->password = $password;
            $user->save();
        }
    }

}