<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file');

        Excel::import(new UsersImport, $file);

        return back()->with('success', 'All good!');
    }
}
