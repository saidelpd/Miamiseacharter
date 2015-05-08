<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\User;


class UsersTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('users')->delete();

        foreach (range(1,50) as $index)
        {
            User::create([
              'first' => $faker->firstName,
              'last' => $faker->lastName,
              'email' => $faker->email,
              'roles_id' => $faker->numberBetween(1,4),
              'password' => Hash::make('kurtcobain'),
          ]);
        }
    }
}