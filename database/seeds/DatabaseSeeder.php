<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Services;
use App\Http\Model\Payments;
use App\Http\Model\User;
use App\Http\Model\Commission;
use App\Http\Model\ServicesSpecialPrice;
use App\Http\Model\ServicesTimes;
use App\Http\Model\Appointments;
use Carbon\Carbon;
use App\Http\Model\Boats;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        $this->call('RolesTableSeeder');
		$this->call('ServicesTableSeeder');
        $this->call('BoatsTableSeeder');
		$this->call('UsersTableSeeder');
		//$this->call('PaymentsTableSeeder');
		$this->call('CommissionTableSeeder');
		$this->call('ServicesSpecialPriceTableSeeder');
        $this->call('ServicesTimesTableSeeder');
       //$this->call('AppointmentsTableSeeder');

	}

}

/**
 * Class ServicesTableSeeder
 */
class ServicesTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('services')->delete();
        $names = ['Dinner'=>300,'Dinner Movie'=>500,'Night At Marina'=>500,'Sea Burial'=>500,'Bimini'=>2500,'Travel'=>300];
        foreach ($names as $keys => $price)
        {
            $special = ($keys == 'Travel' || $keys =='Night At Marina') ? true:false;
            Services::create([
                'name' => $keys,
                'description'=>$faker->realText($faker->numberBetween(10,600)),
                'price' => $price,
                'special_price' => $special
            ]);
        }
    }
}

/**
 * Class PaymentsTableSeeder
 */
class PaymentsTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('payments')->delete();
        $users = User::guess()->get(['id']);
        $services = Services::all();

        foreach (range(1,500) as $payments)
        {
            $total = $services[$faker->numberBetween(0,5)]->price;
            Payments::create([
                'user_id' => $users[$faker->numberBetween(0,count($users)-1)]->id,
                'card_number' => $faker->creditCardNumber,
                'card_type' => $faker->creditCardType,
                'ccv' => $faker->numberBetween(100,999),
                'expiration_month' =>$faker->numberBetween(1,12),
                'expiration_year' => $faker->numberBetween(2016,2022),
                'processed' => 1,
                'total' => $total,
                'taxes' => ($total * 0.07),
            ]);
        }
    }
}

/**
 * Class CommissionTableSeeder
 */
class CommissionTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('commission')->delete();
        $users = User::salesDepartment()->get(['id']);
        foreach ($users as $user)
        {
            Commission::create([
                'user_id' => $user->id,
                'commission_regular' => 10,
                'commission_plus' =>15,
                'commission_plus_from' => 10,
            ]);
        }
    }
}

/**
 * Class ServicesSpecialPriceTableSeeder
 */
class ServicesSpecialPriceTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('services_special_price')->delete();
        ServicesSpecialPrice::create([
            'services_id' => 6,
            'special_hour'=>1,
            'special_price' => 300
        ]);
        ServicesSpecialPrice::create([
            'services_id' => 6,
            'special_hour'=>2,
            'special_price' => 550
        ]);
        ServicesSpecialPrice::create([
            'services_id' => 6,
            'special_hour'=>3,
            'special_price' => 750
        ]);
        ServicesSpecialPrice::create([
            'services_id' => 6,
            'special_hour'=>4,
            'special_price' => 900
        ]);
        ServicesSpecialPrice::create([
            'services_id' => 6,
            'special_hour'=>5,
            'special_price' => 1000
        ]);
        ServicesSpecialPrice::create([
            'services_id' => 3,
            'special_hour'=>2,
            'special_price' => 750
        ]);
    }
}

/**
 * Class ServicesTimesTableSeeder
 */
class ServicesTimesTableSeeder extends Seeder{


    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('services_times')->delete();

        /**
         * DinnerTIme
         */
        ServicesTimes::create([
            'services_id' => 1,
            'time_start'=>'11:00:00',
            'time_end' => '12:30:00'
        ]);
        ServicesTimes::create([
            'services_id' => 1,
            'time_start'=>'13:00:00',
            'time_end' => '14:30:00'
        ]);
        ServicesTimes::create([
            'services_id' => 1,
            'time_start'=>'18:00:00',
            'time_end' => '19:30:00'
        ]);
        ServicesTimes::create([
            'services_id' => 1,
            'time_start'=>'20:00:00',
            'time_end' => '21:30:00'
        ]);
        ServicesTimes::create([
            'services_id' => 1,
            'time_start'=>'22:00:00',
            'time_end' => '00:30:00'
        ]);

        /**
         * Dinner + Movie
         */
        ServicesTimes::create([
            'services_id' => 2,
            'time_start'=>'11:00:00',
            'time_end' => '14:00:00'
        ]);
        ServicesTimes::create([
            'services_id' => 2,
            'time_start'=>'18:00:00',
            'time_end' => '21:00:00'
        ]);
        ServicesTimes::create([
            'services_id' => 2,
            'time_start'=>'22:00:00',
            'time_end' => '01:00:00'
        ]);

        /**
         * Night Marina
         */
        ServicesTimes::create([
            'services_id' => 3,
            'time_start'=>'22:00:00',
            'time_end' => '06:00:00'
        ]);

        /**
         * Sea Burial
         */
        ServicesTimes::create([
            'services_id' => 4,
            'time_start'=>'07:00:00',
            'time_end' => '19:00:00'
        ]);

        /**
         * Bimini
         */
        ServicesTimes::create([
            'services_id' => 5,
            'time_start'=>'07:00:00',
            'time_end' => '19:00:00'
        ]);

        /**
         * Travel
         */
        ServicesTimes::create([
            'services_id' => 6,
            'time_start'=>'07:00:00',
            'time_end' => '12:00:00'
        ]);
        ServicesTimes::create([
            'services_id' => 6,
            'time_start'=>'13:00:00',
            'time_end' => '18:00:00'
        ]);
    }
}


/**
 * Class AppointmentsTableSeeder
 */
class AppointmentsTableSeeder extends Seeder{

   public $start_time;
    public $end_time;
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        DB::table('appointments')->delete();
        $payments = Payments::all();
        foreach ($payments as $pay)
        {
            $date = Carbon::create('2015',$faker->numberBetween(6,8),$faker->numberBetween(1,30));
            $service = Services::with('times')->where('id',$faker->numberBetween(1,6))->first();
            $users = User::salesDepartment()->get(['id']);
            $boat = $this->GetFreeBoat($date,$service);

            if(isset($boat->id))
            {
                Appointments::create([
                    'payments_id' => $pay->id,
                    'services_id' => $service->id,
                    'boat_id' => $boat->id,
                    'user_id' =>  $users[$faker->numberBetween(0,count($users)-1)]->id,
                    'start' => $this->start_time,
                    'end' => $this->end_time
                ]);
            }
        }
    }

    public function GetFreeBoat(Carbon $date,$service)
    {
        if(count($service->times))
        {
            foreach($service->times as $timesAllow)
            {
                $time = $timesAllow->GetTime($date);
                if($boat = Boats::getFree($time['start'], $time['end']))
                {
                    $this->start_time = $time['start'];
                    $this->end_time = $time['end'];
                    return $boat;
                }
            }
        }
    }

}