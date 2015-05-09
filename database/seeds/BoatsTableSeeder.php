<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Boats;


class BoatsTableSeeder extends Seeder{

    public function run()
    {
        DB::table('boats')->delete();
        $boats = ['Siguarrete','Venlander'];
        $aux = 0;
        foreach ($boats as $rol)
        {
            Boats::create([
              'name' => $rol,
              'priority'=>$aux
          ]);
          $aux++;
        }
    }
}