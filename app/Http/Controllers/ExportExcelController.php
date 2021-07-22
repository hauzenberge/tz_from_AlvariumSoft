<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
    public function index() {
        $users = User::all();
        return view('welcome')->with(compact('users', $users));;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
       // dd(new UsersExport);
        return Excel::download(new UsersExport, 'employes.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }
}
