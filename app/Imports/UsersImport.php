<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
            'name'     => $row[0],
            'departament_id' =>$row[1],
            'email'    => $row[2],
            'password' => Hash::make(rand(8, 50)),
        ]);
    }
}
