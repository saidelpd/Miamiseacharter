<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\User;


class UsersTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('users')->delete();
        foreach (range(1,15) as $index)
        {
            User::create([
              'first' => $faker->firstName,
              'last' => $faker->lastName,
              'email' => $faker->email,
              'phone' => $faker->phoneNumber,
              'code' => $faker->numberBetween(1000,9999),
              'roles_id' => $faker->numberBetween(1,3),
              'password' => Hash::make('kurtcobain'),
          ]);
        }
    }
}