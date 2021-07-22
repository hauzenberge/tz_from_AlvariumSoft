<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class EmployesController extends Controller
{
    public function index() {
        $users = User::all();
        return view('welcome')->with(compact('users', $users));;
    }

    public function edit($id){
        return view('edit_employ',[
            'user' => User::find($id),
        ]);
    }

    public function store($id, Request $request){
        //dd($request->input());
        $user = User::where('id', '=', $id)->first(); ;
        //dd($user);
        $user->name = $request->input('name');
        $user->departament_id = $request->input('department');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/employes/edit/'.$id);
    }

    public function destroy($id){
        $employ = User::find($id);
        $employ->delete();
        return redirect('employes');
    }
}
