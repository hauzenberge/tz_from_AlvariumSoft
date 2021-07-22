<?php

use Illuminate\Database\Seeder;

use App\Departament;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=['Admin', 'Work', 'Office',  'Devs', 'Manager',];
        foreach ($items as $item) {
            $departament = new Departament;
            $departament->name = $item;
            $departament->save();
        }

    }
}
