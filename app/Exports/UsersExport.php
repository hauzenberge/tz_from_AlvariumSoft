<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = DB::table('users')->select('name', 'departament_id','email')->get();
        $collection = collect([[]]);
        return $collection->merge($users);
    }
}
