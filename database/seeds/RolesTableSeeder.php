<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Roles;


class RolesTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();
        $roles = ['Admin','Concierge','Vendors','Guess'];
        foreach ($roles as $rol)
        {
          Roles::create(['name' => $rol]);
        }
    }
}