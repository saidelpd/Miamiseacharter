<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Boats;


class BoatsTableSeeder extends Seeder{

    public function run()
    {
        DB::table('boats')->delete();
        $boats = ['Siguarrete','Venlander'];
        $color = ['#5cb85c','#337ab7'];
        $aux = 0;
        foreach ($boats as $key=>$rol)
        {
            Boats::create([
              'name' => $rol,
              'priority'=>$aux,
              'color'=> $color[$key]
          ]);
          $aux++;
        }
    }
}