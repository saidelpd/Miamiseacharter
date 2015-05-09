<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Appointments;
use App\Http\Model\Payments;
use App\Http\Model\Services;
use App\Http\Model\Boats;
use Carbon\Carbon;


class AppointmentsTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('appointments')->delete();
        $payments = Payments::all();
        foreach ($payments as $pay)
        {
            $date = Carbon::create('2015',$faker->numberBetween(6,12),$faker->numberBetween(6,12));
            $service = Services::with('times')->where('id',$faker->numberBetween(1,6))->first();

            $boat = Boats::find($faker->numberBetween(1,2));

            if($boat->getFree());

            $users = Appointments::where('')->get();


            Appointments::create([
              'payments_id' => $pay->id,
              'services_id' => $service->id,
              'boat_id' =>$faker->numberBetween(1,2),
              'start' => $date,
              'end' => $date->addHour(1.5),
          ]);
        }
    }
}