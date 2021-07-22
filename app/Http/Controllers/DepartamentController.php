<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class DepartamentController extends Controller
{
    public function users($id){
       // dd($id);
        $users = User::where('departament_id', '=', $id)->get();
        return view('welcome')->with(compact('users', $users));;
    }
}
