<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Roles;


class BoatsTableSeeder extends Seeder{

    public function run()
    {
        DB::table('boats')->delete();
        $boats = ['Admin','Concierge','Vendors'];
        $aux = 0;
        foreach ($boats as $rol)
        {
          Roles::create([
              'name' => $rol,
              'priority'=>$aux
          ]);
          $aux++;
        }
    }
}